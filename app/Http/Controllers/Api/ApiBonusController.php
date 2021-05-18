<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiBonusController extends Controller
{

    public function createBonus( Request $request){
    $bulan = Carbon::now()->isoFormat('MMMM');

        DB::table('bonus')
                ->insert([
                    'title' => $request->speed,
                    'deskripsi' => 'ambil bonus untuk menambah kecepatan internet anda. "berlaku sampai akhir bulan $bulan"',
                    'bulan' => $bulan,
                    'created_at' => date('Y-m-d'),
                ]);
                return response()->json(
                    [
                        'success' => true,
                        'pesan' => 'berhasil tambah data',
                    ]
                );

    }


    public function getBonus(){


    $bulan = Carbon::now()->isoFormat('MMMM');

    $bonus = DB::table('bonus')->where('bulan',$bulan)->get();

    return response()->json(
        [
            'success' => true,
            'data' => $bonus,
            'pesan' => 'berhasil ambil data',
        ]
    );

    }

    public function claimBonus($id){
        $bulan = Carbon::now()->isoFormat('MMMM');

        $user = Auth::user()->id;

        $check = DB::table('bonus')->where([['bulan', $bulan],['user_id', $user]])->get();


        if ( $check->isEmpty()) {
            DB::table('bonus')->where('id', $id)
                ->update([
                    'claim' => Auth::user()->name,
                    'user_id' => Auth::user()->id,
                    'status' => false,
                    'updated_at' => date('Y-m-d'),
                ]);

                return response()->json(
                    [
                        'success' => true,
                        'pesan' => 'berhasil claim bonus',
                    ]
                );
        } else {
            return response()->json(
                [
                    'success' => true,
                    'pesan' => 'sudah claim bonus',
                ],201
            );
        }
        

    }

    public function myBonus(){

        $bulan = Carbon::now()->isoFormat('MMMM');

        $mybonus = DB::table('bonus')->where([['status', false],['bulan',$bulan],['user_id', Auth::user()->id]])->get();

        return response()->json(
            [
                'success' => true,
                'data' => $mybonus,
                'pesan' => 'berhasil ambil data',
            ]
        );
    
    }
}
