<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\langganan;
use Illuminate\Http\Request;

use App\Pembayaran;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Str;


// use Telegram\Bot\Laravel\Facades\Telegram;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {

        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
            ]
        )) {
            $user = Auth::user();
            $rolename = DB::table('model_has_roles')->where('model_id', Auth::user()->id)
            ->leftjoin('roles','model_has_roles.role_id','=', 'roles.id')
            ->select('roles.name')->get();
            foreach($rolename as $value){
                $role = $value->name;
            }
            
            
            $token = $user->createToken('user')->accessToken;
            $data['user'] = $user;
            $data['token'] = $token;
            $data['role'] = $role;
            return response()->json([
                'success' => true,
                'data' => $data,
                'pesan' => 'login Berhasil'
            ], 200);
        } else {
            return response()->json(
                [
                    'success' => false,
                    'data' => '',
                    'pesan' => 'Login Gagal',
                ],
                401
            );
        }
    }

    public function user()
    {
        $userid = Auth::user()->id;

        $paymentReq = DB::table('pembayaran')->where('status', false)->count();
        $usersLunas = DB::table('posision_users')->where('status', true)->count();
        $usersPanding = DB::table('posision_users')->where('status', false)->count();

        $users = Auth::user();
        $profil = DB::table('profile_users')->where('user_id', $userid)->get();
         foreach ($profil as $value) {
            $usersprofil = $value;
         }

        $rolename = DB::table('model_has_roles')->where('model_id', Auth::user()->id)
            ->leftjoin('roles','model_has_roles.role_id','=', 'roles.id')
            ->select('roles.name')->get();
            foreach($rolename as $value){
                $role = $value->name;
            }
        $notif = DB::table('notifikasi')->where('user_id', Auth::user()->id)->get();

        $notifcount = DB::table('notifikasi')->where([['user_id',$userid ],['status', false]])->count();
        
        $data['paymentReq'] = $paymentReq;
        $data['usersLunas'] = $usersLunas;
        $data['usersPanding'] = $usersPanding;
        $data['users'] = $users;
        $data['role'] = $role;
        $data['notif'] = $notif;
        $data['notifcount'] = $notifcount;
        $data['userProfile'] = $usersprofil;
        
        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);

    }

    //List pembayaran internet
    public function payment()
    {

        $users = Auth::user()->id;
        $data = Pembayaran::where([['user_id','=', $users],['status','=', true]])
            ->leftjoin('users', 'users.id', '=', 'pembayaran.author_id')
            ->select('users.name', 'pembayaran.*')->orderBy('id', 'DESC')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);
    }

    //Keteragan pembayaran
    public function payinet()
    {

        $today = Carbon::now()->isoFormat('Y-MM');
        $bulan = Carbon::now()->isoFormat('MMMM');

        $data = DB::table('pembayaran')->where([
            ['user_id', '=', Auth::user()->id],
            ['cek', '=', $today]
        ])->get();

        foreach ($data as $item) {
            $status = $item->status;
        }


        if ($data == '[]') {
            return response()->json([
                'success' => false,
                'data' => "anda belum membayar Iuran",
                'pesan' => "belum Iuran"
            ]);
        } elseif ($status == false) {
            return response()->json([
                'success' => true,
                'data' => "Menunggu konfirmasi",
                'pesan' => "Menunggu konfirmasi"
            ], 201);
        } elseif ($status == true) {
            return response()->json([
                'success' => true,
                'data' => "Iuran bulan $bulan Lunas",
                'pesan' => "Iuran Lunas"
            ], 202);
        }
    }

    // keteragan kecepatan internet
    public function datainet()
    {

        $data = DB::table('users')->where([['users.id', '=', Auth::user()->id]])
            ->leftJoin('langganan', 'users.status_langganan', '=', 'langganan.id')
            ->select('langganan.harga', 'langganan.kecepatan')
            ->get();
            
            foreach($data as $items){
                $datas = $items;
            }


        return response()->json([
            'success' => true,
            'data' => $datas,
            'pesan' => 'Berhasil ambil data'
        ]);
    }

    //data admin

    public function adminuser()
    {
        $data = DB::table('model_has_roles')->where([['model_has_roles.role_id', '=', 7]])
            ->leftJoin('users', 'model_has_roles.model_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'users.profile_photo')
            ->get();

        if ($data == '[]') {
            return response()->json([
                'success' => false,
            ], 201);
        } else {
            return response()->json([
            'success' => true,
            'admin' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);
        }
    }

    public function paymentpost(Request $request)
    {

        $users = Auth::user()->id;

        $cek = Pembayaran::where([
            ['user_id', '=', $users],
            ['cek', '=', Carbon::now()->format('Y-m')],
        ])
            ->select('pembayaran.cek')
            ->get();

        if ($cek->isEmpty()) {
            $userID = Auth::user()->id;
            $userName = Auth::user()->name;
            $userAvatar = Auth::user()->avatar;

            $data = DB::table('users')->where([['users.id', '=', $userID]])
                ->leftJoin('langganan', 'users.status_langganan', '=', 'langganan.id')
                ->select('langganan.harga', 'langganan.kecepatan','users.*')
                ->get();
            foreach ($data as $detail) {
                $items = $detail->harga;
            }
            DB::table('pembayaran')->insert([
                'user_id' => $userID,
                'nominal' => $items,
                'bulan' => Carbon::now()->isoformat('MMMM'),
                'tahun' => date('Y'),
                'author_id' => $request->id,
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

                $token = DB::table('users')->where('id',  $request->id)->get();
                foreach ( $token as $detail) {
                    $FCM_token = $detail->notif_fcm;
                }
                
                $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

                
                $data = [

                    "registration_ids" => [
                        $FCM_token
                    ],

                    "notification" => [

                        "title" => 'Request Iuran',

                        "body" =>  $userName.' meminta konfirmasi Iuran',

                        "image" =>  $userAvatar,

                        "sound"=> 'stoneSkimingDay4', // required for sound on ios

                    ],

                ];

                $dataString = json_encode($data);

                $headers = [

                    'Authorization: key=' . $SERVER_API_KEY,

                    'Content-Type: application/json',

                ];

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

                curl_setopt($ch, CURLOPT_POST, true);

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

                $response = curl_exec($ch);

            return response()->json([
                'success' => true,
                'pesan' => 'Berhasil post data'
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'pesan' => 'Data sudah ada !'
            ],201);
        }
    }
    
    public function teman(){
        
        $data = DB::table('posision_users')->where([['posision_users.posision_id', '=', 2]])
            ->leftJoin('users', 'posision_users.user_id', '=', 'users.id')
            ->select('users.*')
            ->get();
            
        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);
    }
    
    public function laporan()
    {
        $cekdate = Carbon::now()->format('Y-m');


        $data = Pembayaran::where([['author_id', '=', Auth::user()->id], ['status','=', false],['cek', '=', $cekdate]])
            ->leftjoin('users','users.id','=','pembayaran.user_id')
            ->select('users.name', 'pembayaran.*','users.avatar')
            ->get();

        $harga_total = DB::table('pembayaran')->where([
            ['author_id', '=', Auth::user()->id],
            ['cek', '=', $cekdate]
        ])->sum('pembayaran.nominal');




        return response()->json([
            'success' => true,
            'data' => $data,
            'total_harga' => $harga_total,
            'pesan' => 'Berhasil ambil data'
        ]);
    }
    
    public function laporanadmin()
    {
        $cekdate = Carbon::now()->format('Y-m');


        $data = Pembayaran::where([['author_id', '=', Auth::user()->id],['cek', '=', $cekdate]])
            ->leftjoin('users','users.id','=','pembayaran.user_id')
            ->select('users.name', 'pembayaran.*','users.avatar')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);
    }

    public function usersLunas(){
        
        $cekdate = Carbon::now()->format('Y-m');
        
         $data = DB::table('posision_users')->where([['status','=',true],['posision_id', '=', 2 ]])
         ->leftjoin('users', 'users.id','=','posision_users.user_id')
         ->leftjoin('langganan', 'users.status_langganan','=','langganan.id')
         ->get();
         
        $harga_total = DB::table('pembayaran')->where([
            ['author_id', '=', Auth::user()->id],
            ['cek', '=', $cekdate]
        ])->sum('pembayaran.nominal');

        return response()->json([
            'success' => true,
            'data' => $data,
            'total_harga' => $harga_total,
            'pesan' => 'Berhasil ambil data'
        ]);
    }

    public function usersPanding(){
        $data = DB::table('posision_users')->where([['status','=',false],['posision_id', '=', 2 ]])
        ->leftjoin('users', 'users.id','=','posision_users.user_id')
        ->leftjoin('langganan', 'users.status_langganan','=','langganan.id')
        ->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);
    }


    public function statusTrue(Request $request){

        $user = $request->user;
        $posision = $request->posision;


        
            $cek = Pembayaran::where([
                ['user_id', '=', $user],
                ['cek', '=', Carbon::now()->format('Y-m')],
            ])
                ->select('pembayaran.cek')
                ->get();
            // return response()->json($users);

            if (!empty($user)) {
                
                if ($cek->isEmpty()) {
                    
                     DB::table('posision_users')->where([['user_id','=', $user],['posision_id','=', $posision]])
                    ->update([
                        'status' => true,
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);

                    $data = DB::table('users')->where([['users.id', '=', $user]])
                        ->leftJoin('langganan', 'users.status_langganan', '=', 'langganan.id')
                        ->select('langganan.harga', 'langganan.kecepatan')
                        ->get();
                    foreach ($data as $detail) {
                        $items = $detail->harga;
                    }

                    // membuat input pembayaran ketika users tergenerate lunas
                    DB::table('pembayaran')->insert([
                        'user_id' => $user,
                        'nominal' => $items,
                        'bulan' => Carbon::now()->isoformat('MMMM'),
                        'tahun' => date('Y'),
                        'author_id' => Auth::user()->id,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        'cek' => date('Y-m'),
                        'status' => true,
                    ]);
                } else {
                    DB::table('posision_users')->where([['user_id','=', $user],['posision_id','=', $posision]])
                    ->update([
                        'status' => true,
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);

                    DB::table('pembayaran')->where([
                        ['user_id', '=', $user],
                        ['cek', '=', Carbon::now()->format('Y-m')],
                    ])    
                    ->update([
                        'status' => true,
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                }
            }


        return response()->json([
            'success' => true,
            'pesan' => 'Berhasil update data'
        ],201);
    }
    
    public function statusFalse(Request $request){

        $user = $request->user;
        $posision = $request->posision;

        
            $cek = Pembayaran::where([
                ['user_id', '=', $user],
                ['cek', '=', Carbon::now()->format('Y-m')],
            ])
                ->select('pembayaran.cek')
                ->get();
            // return response()->json($users);

            if (!empty($user)) {
                if ($cek->isEmpty()) {
                    DB::table('posision_users')->where([['user_id','=', $user],['posision_id','=', $posision]])
                        ->update([
                            'status' => false,
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);

                    return response()->json([
                        'success' => true,
                        'pesan' => 'Berhasil update data'
                    ],201);
                    
                } else {
                    return response()->json([
                        'success' => true,
                        'pesan' => 'User sudah iuran bulan ini'
                    ]);
                }
            }


        
    }
    
    
    
    public function update(Request $request)
    {
        Pembayaran::where('id', $request->id)
            ->update([
                'status' => true,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        DB::table('posision_users')->where('user_id', $request->userid)
            ->update([
                'status' => true,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        $penerima = Auth::user()->name;

        $pembayar = DB::table('users')->where('users.id', $request->userid)->get();

        foreach ($pembayar as $value) {
            $payed = $value->name;
        }
        
        $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

        $notifID = DB::table('users')->where('id',$request->userid)->get();
        
        foreach($notifID as $key){
            $fcm_key = $key->notif_fcm;
        }
        
                    $token_1 = $fcm_key;
    
                    $data = [
    
                        "registration_ids" => [
                            $token_1
                        ],
    
                        "notification" => [
    
                            "title" => 'Berhasil..',
    
                            "body" => 'Iuran anda telah di konfirmasi.',
                            
                            "icon" => 'https://www.rumahweb.com/assets/img/accredited-id.png',
    
                            "sound"=> "default" // required for sound on ios
    
                        ],
    
                    ];
    
                    $dataString = json_encode($data);
    
                    $headers = [
    
                        'Authorization: key=' . $SERVER_API_KEY,
    
                        'Content-Type: application/json',
    
                    ];
    
                    $ch = curl_init();
    
                    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    
                    curl_setopt($ch, CURLOPT_POST, true);
    
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
    
                    $response = curl_exec($ch);
    

        // return response()->json($pembayar);

        // $text = "Iuran dari $payed sudah dikonfirmasi oleh  $penerima.\n";

        // Telegram::sendMessage([
        //     'chat_id' => -1001165814900,
        //     'parse_mode' => 'HTML',
        //     'text' => $text
        // ]);

        return response()->json([
            'success' => true,
            'pesan' => 'Berhasil konfirmasi data'
        ],201);
    }
    
    public function paymentAllUsers($bulan){
        
        if ($bulan == 'All'){
            $data = DB::table('pembayaran')
            ->leftjoin('users', 'users.id','=', 'pembayaran.user_id')
            ->leftjoin('profile_users','profile_users.user_id','=','pembayaran.author_id')
            ->select('profile_users.nama', 'users.name','pembayaran.*')
            ->get();
            
            return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
            ]);
            
        }else{
            
            $data = DB::table('pembayaran')->where('bulan', $bulan)
            ->leftjoin('users', 'users.id','=', 'pembayaran.user_id')
            ->leftjoin('profile_users','profile_users.user_id','=','pembayaran.author_id')
            ->select('profile_users.nama', 'users.name','pembayaran.*')
            ->get();
            
            return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
            ]);
            
        }
        
        
        
        
    }
    
    public function fcmToken(Request $request){
        
        $fcm = $request->fcmtoken;
        
        $id = Auth::user()->id;
        
        DB::table('users')->where('id',$id)
        ->update([
                'notif_fcm' => $fcm,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        
        return response()->json([
            'success' => true,
            'pesan' => 'Berhasil update data'
        ]);
    }
    public function paymentAllUsersdelete($id){
        
        DB::table('pembayaran')->where('id', $id)->delete();
        
        return response()->json([
            'success' => true,
            'pesan' => 'Berhasil hapus data'
        ],201);
    }
    
    public function berita(){
        
        $data = DB::table('berita')
        ->leftjoin('users', 'users.id','=', 'berita.author_id')
        ->select('users.name', 'berita.*')
        ->get();
        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil mengambil data'
        ]);
    }
    
    public function IuranOption(){
        
        $data = DB::table('opsi_iuran')->get();
        
        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil mengambil data'
        ]);
    }
    
    
    public function userCount()
    {
        $totalusers = DB::table('posision_users')->where('posision_id',2)->count();
        $usersLunas = DB::table('posision_users')->where([['status', true],['posision_id','=',2]])->count();
        $usersPanding = DB::table('posision_users')->where([['status', false],['posision_id','=',2]])->count();
        
        
        $data['totalUser'] = $totalusers;
        $data['usersLunas'] = $usersLunas;
        $data['usersPanding'] = $usersPanding;
        
        return response()->json([
            'success' => true,
            'data' => $data,
            'pesan' => 'Berhasil ambil data'
        ]);

    }
    
}

































