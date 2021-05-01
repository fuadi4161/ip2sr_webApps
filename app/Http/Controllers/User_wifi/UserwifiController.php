<?php

namespace App\Http\Controllers\User_wifi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\UserPosision;
use App\HasRole;
use App\Pembayaran;
use Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\NewUserNotification;

use Telegram;

class UserwifiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userwifi = UserPosision::where('posision_id', 2)
            ->leftJoin('profile_users', ['posision_users.user_id' => 'profile_users.user_id'])
            ->leftJoin('posisions', ['posisions.id' => 'posision_users.posision_id'])
            ->leftJoin('users', ['users.id' => 'posision_users.user_id'])
            ->leftJoin('status_langganan', ['users.id' => 'status_langganan.user_id'])
            ->select('profile_users.*', 'posision_users.*', 'posisions.name', 'users.*', 'status_langganan.harga', 'status_langganan.kecepatan')
            ->get();

        $user = User::all();

        return view('Users.wifi', compact('userwifi', 'user'));
    }

    public function status($status, $id)
    {
        UserPosision::where('user_id', $id)
            ->update([
                'status' => $status,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return back()->with(Session::flash('success', 'status berhasil di update !'));
    }

    public function status1generate(Request $request)
    {

        $user = $request->user;

        foreach ($user as $users) {
            $cek = Pembayaran::where([
                ['user_id', '=', $users],
                ['cek', '=', Carbon::now()->format('Y-m')],
            ])
                ->select('pembayaran.cek')
                ->get();
            // return response()->json($users);

            if (!empty($users)) {
                UserPosision::where('user_id', $users)
                    ->update([
                        'status' => $request->status1,
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                if ($cek->isEmpty()) {
                    $data = DB::table('users')->where([['users.id', '=', $users]])
                        ->leftJoin('langganan', 'users.status_langganan', '=', 'langganan.id')
                        ->select('langganan.harga', 'langganan.kecepatan')
                        ->get();
                    foreach ($data as $detail) {
                        $items = $detail->harga;
                    }
                    // return response()->json(Carbon::now()->isoformat('MMMM'));
                    DB::table('pembayaran')->insert([
                        'user_id' => $users,
                        'nominal' => $items,
                        'bulan' => Carbon::now()->isoformat('MMMM'),
                        'tahun' => date('Y'),
                        'author_id' => Auth::user()->id,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        'cek' => date('Y-m'),
                    ]);
                } else {
                    DB::table('posision_users')->where('id', $users)
                        ->update([
                            'status' => true,
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                }
            }
        }

        // return response()->json($send);

        return back()->with(Session::flash('success', 'status berhasil di update.!!'));
    }

    public function status0generate(Request $request)
    {

        $user = $request->user;
        foreach ($user as $users) {
            if (!empty($users)) {
                UserPosision::where('user_id', $users)
                    ->update([
                        'status' => $request->status0,
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
            }
        }

        return back()->with(Session::flash('success', 'status berhasil di update.!!'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $email = $data['email'];

        $userwifi = new User;
        $userwifi->name = $data['name'];
        $userwifi->email = $data['email'];
        $userwifi->password = bcrypt($data['password']);
        $userwifi->status_langganan = $data['status_langganan'];
        $userwifi->save();

        $posision = new UserPosision;
        $posision->user_id = $userwifi->id;
        $posision->posision_id = 2;
        $posision->save();

        $hasrole = new HasRole;
        $hasrole->role_id = 8;
        $hasrole->model_type = 'App\User';
        $hasrole->model_id = $userwifi->id;
        $hasrole->save();

        \Mail::to($email)->send(new \App\Mail\NewUserNotification($detail));

        return back();
    }

    public function adminwifi(Request $request)
    {

        $data = $request->all();

        $userwifi = new User;
        $userwifi->name = $data['name'];
        $userwifi->email = $data['email'];
        $userwifi->password = bcrypt($data['password']);
        $userwifi->save();

        $posision = new UserPosision;
        $posision->user_id = $userwifi->id;
        $posision->posision_id = 2;
        $posision->save();

        $hasrole = new HasRole;
        $hasrole->role_id = 7;
        $hasrole->model_type = 'App\User';
        $hasrole->model_id = $userwifi->id;
        $hasrole->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bayar(Request $request)
    {
        $users = Auth::user()->id;

        //Kirim pesan telegram
        $username = Auth::user()->name;
        $internet = DB::table('users')->where('users.id', $users)
                    ->leftjoin('langganan', 'langganan.id', '=', 'users.status_langganan')
                    ->select('langganan.harga','langganan.kecepatan')->get();
        foreach ( $internet as $inet) {
            
            $harga = $inet->harga;
            $kecepatan = $inet->kecepatan;
        }

        $kepada = DB::table('users')->where('users.id', $request->name)
                    ->select('users.name')->get();
        foreach ($kepada as $kep) {
            $penerima = $kep->name;
        }


        // return response()->json($internet);

        $cek = Pembayaran::where([
            ['user_id', '=', $users],
            ['cek', '=', Carbon::now()->format('Y-m')],
        ])
            ->select('pembayaran.cek')
            ->get();

        if ($cek->isEmpty()) {
            $userID = Auth::user()->id;
            $data = DB::table('users')->where([['users.id', '=', $userID]])
                ->leftJoin('langganan', 'users.status_langganan', '=', 'langganan.id')
                ->select('langganan.harga', 'langganan.kecepatan')
                ->get();
            foreach ($data as $detail) {
                $items = $detail->harga;
            }
            DB::table('pembayaran')->insert([
                'user_id' => $userID,
                'nominal' => $items,
                'bulan' => Carbon::now()->isoformat('MMMM'),
                'tahun' => date('Y'),
                'author_id' => $request->name,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'cek' => date('Y-m'),
                'status' => false,
            ]);

            DB::table('posision_users')->where('user_id', $users)
                ->update([
                    'status' => false,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

            $activity = Telegram::getUpdates();
        // return response()->json($activity);
            $text = "Permintaan konfirmasi Iuran\n"
                    . "<b> Dari: $username </b>\n"
                    . "<b> Kepada:  $penerima </b>\n"
                    . "<b> Message: </b>\n"
                    . "<b> </b>\n"
                    . "<b> Nominal: $harga </b>\n"
                    . "<b> Kecepatan: $kecepatan</b>\n"
                    . "<b> </b>\n"
                    . "https://ip2sr.site";
 
            Telegram::sendMessage([
                'chat_id' => -1001165814900,
                'parse_mode' => 'HTML',
                'text' => $text
            ]);

            return back()->with(Session::flash('success', 'status berhasil di update.!!'));
        } else {
            return back()->with(Session::flash('error', 'status gagal di update.!!'));
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
