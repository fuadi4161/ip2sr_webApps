<?php

namespace App\Http\Controllers\Admin_wifi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProfilUser;
use App\StatusLangganan;

use Illuminate\Support\Facades\Auth;
use App\UserPosision;
use Illuminate\Support\Carbon;
use App\Pembayaran;
use Illuminate\Support\Facades\DB;

class AdminwifiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user()->id;

        $check = Pembayaran::where([
            ['user_id', '=', $users],
            ['cek', '=', Carbon::now()->format('Y-m')],
        ])->get();

        if ($check->isEmpty()) {

            $payment = null;
            $payments = null;

        } else {
            $payment = true;
            $payments = Pembayaran::where([
                ['user_id', '=', $users],
                ['cek', '=', Carbon::now()->format('Y-m')],
            ])->get();
        }

        $profile = ProfilUser::where('user_id', Auth::user()->id)->get();
        $user = UserPosision::where('user_id', Auth::user()->id)->get();
        $inet = StatusLangganan::where('user_id', Auth::user()->id)->get();
        $author = Pembayaran::where('user_id', Auth::user()->id)
            ->join('users', 'pembayaran.author_id', '=', 'users.id')
            ->get();

        foreach ($author as $data) {
            $detail = $data->name;
        }

        // return response()->json($author);

        $today = Carbon::now()->isoFormat('D MMMM Y');
        $bulan = Carbon::now()->isoFormat('MMMM');

        $penerima = DB::table('model_has_roles')->where('role_id', 7)
            ->leftJoin('users', 'users.id', '=', 'model_has_roles.model_id')
            ->get();


        $this->data['profile'] = $profile;
        $this->data['user'] = $user;
        $this->data['inet'] = $inet;
        $this->data['author'] = $author;
        $this->data['penerima'] = $penerima;
        $this->data['payment'] = $payment;
        $this->data['payments'] = $payments;

        if ($author->isempty()) {
            # code...
        } else {
            $this->data['detail'] = $detail;
        }

        $this->data['today'] = $today;
        $this->data['bulan'] = $bulan;

        // return response()->json($payment);


        return view('Wifi.dashboard', $this->data);
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
        //
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
