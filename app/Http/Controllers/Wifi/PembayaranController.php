<?php

namespace App\Http\Controllers\Wifi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pembayaran;
use Auth;
use DB;
use Illuminate\Support\Carbon;
use Session;

use Telegram;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembayaran::where([['user_id','=',Auth::user()->id],['status','=', true]])
            ->orderBy('created_at', 'desc')
            ->join('users', 'users.id', '=', 'pembayaran.author_id')
            ->select('pembayaran.created_at', 'users.name')
            ->get();
        $items = DB::table('langganan')->where('id', Auth::user()->status_langganan)->get();

        foreach ($items as $item) {

            $detail = $item->harga;
        }

        $this->data['data'] = $data;
        $this->data['detail'] = $detail;

        // return response()->json($this->data);
        return view('Pembayaran.index', $this->data);
    }
    public function laporan()
    {
        $cekdate = Carbon::now()->format('Y-m');
        $data = Pembayaran::where('author_id', Auth::user()->id)
            ->join('users', 'users.id', '=', 'pembayaran.user_id')
            ->join('status_langganan', 'status_langganan.user_id', '=', 'users.id')
            ->select('pembayaran.*', 'users.name', 'status_langganan.harga', 'status_langganan.kecepatan')
            ->get();

        $harga_total = DB::table('pembayaran')->where([
            ['author_id', '=', Auth::user()->id],
            ['cek', '=', $cekdate]
        ])
            ->join('users', 'users.id', '=', 'pembayaran.user_id')
            ->join('status_langganan', 'status_langganan.user_id', '=', 'users.id')
            ->sum('status_langganan.harga');




        return view('Pembayaran.laporan', compact('data', 'cekdate', 'harga_total'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, $users)
    {
        Pembayaran::where('id', $id)
            ->update([
                'status' => true,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        DB::table('posision_users')->where('user_id', $users)
            ->update([
                'status' => true,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        $penerima = Auth::user()->name;

        $pembayar = DB::table('users')->where('users.id', $users)->get();

        foreach ($pembayar as $value) {
            $payed = $value->name;
        }

        // return response()->json($pembayar);

        $text = "Iuran dari $payed sudah dikonfirmasi oleh  $penerima.\n";

        Telegram::sendMessage([
            'chat_id' => -1001165814900,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

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
