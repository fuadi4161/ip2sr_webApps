<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoicePaid;

class Invoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'InvoicePaid:notif';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'mengirim notifikasi iuran setiap bulannya';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $notifID = DB::table('users')->get();
        $bulan = Carbon::now()->isoformat('MMMM');

        $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

            foreach ($notifID as $key) {
                if (!empty($key)) {
                    $fcm_key = $key->notif_fcm;
                    $email = $key->email;

                    $detail = [
                        'name' => 'Fuadz',
                        'info' => 'Laravel & Python Devloper'
                    ];
            
                    \Mail::to($email)->send(new \App\Mail\InvoicePaid($detail));

                            $token_1 = $fcm_key;

                            $data = [

                                "registration_ids" => [
                                    $token_1
                                ],

                                "notification" => [

                                    "title" => 'Hai..  Assalamualikum.. 👋👋 ' ,

                                    "body" => 'Alhamdulillah... gak kerasa sudah hampir tanggal 5.. oiya jangan sampai wifi off karena lupa bayar tagihan listrik yaa..🤭🤭',

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

                            // dd($response);
                    }
            }
    }
}
