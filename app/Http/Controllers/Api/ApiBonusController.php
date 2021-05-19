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
    $notifID = DB::table('users')->get();

        DB::table('bonus')
                ->insert([
                    'title' => $request->speed,
                    'deskripsi' => 'ambil bonus untuk menambah kecepatan internet anda. "berlaku sampai akhir bulan '. $bulan. '"',
                    'bulan' => $bulan,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);

            // $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

            // foreach ($notifID as $key) {
            //     if (!empty($key)) {
            //         $fcm_key = $key->notif_fcm;

            //                 $token_1 = $fcm_key;

            //                 $data = [

            //                     "registration_ids" => [
            //                         $token_1
            //                     ],

            //                     "notification" => [

            //                         "title" => 'Free.. Kecapatan internet 2 Mbops!!!' ,

            //                         "body" => 'Hai.. teman-teman ada bonus nih , buruan ambil !!! keburu di ambil anggota lain lhoo',

            //                         "sound"=> "default" // required for sound on ios

            //                     ],

            //                 ];

            //                 $dataString = json_encode($data);

            //                 $headers = [

            //                     'Authorization: key=' . $SERVER_API_KEY,

            //                     'Content-Type: application/json',

            //                 ];

            //                 $ch = curl_init();

            //                 curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

            //                 curl_setopt($ch, CURLOPT_POST, true);

            //                 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            //                 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            //                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            //                 curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

            //                 $response = curl_exec($ch);

            //                 // dd($response);
            //         }
            // }
                return response()->json(
                    [
                        'success' => true,
                        'pesan' => 'berhasil tambah data',
                    ]
                );

    }


    public function getBonus(){


    $bulan = Carbon::now()->isoFormat('MMMM');

    $bonus = DB::table('bonus')->where('bulan',$bulan)->orderBy('id', 'DESC')->get();

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
                    'updated_at' => date('Y-m-d H:i:s'),
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

        $mybonus = DB::table('bonus')->where([['status', false],['bulan',$bulan],['user_id', Auth::user()->id]])->latest()->get();

        foreach ( $mybonus as $bon){
            $bonus = $bon;
        }

        return response()->json(
            [
                'success' => true,
                'data' => $bonus,
                'pesan' => 'berhasil ambil data',
            ]
        );
    
    }
}
