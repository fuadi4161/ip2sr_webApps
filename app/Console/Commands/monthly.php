<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class monthly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'month:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk mengupdate status user default false stiap awal bulan';

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
        $chatID = DB::table('profile_users')->get();
        $notifID = DB::table('users')->get();
        $bulan = Carbon::now()->isoformat('MMMM');
        
        
        //Sesi Notifikasi Telegram
        foreach ($chatID as $chat) {
            if (!empty($chat)) {
            $username = $chat->nama;
            $text = "Assalamualaikum. \n"
                . "\n"
                . "Selamat Malam \n"
                . "\n"
                . "\n"
                . "<b>Untuk iuran wifi bulan $bulan terakhir tanggal 5 nggih.. maximal sampai tanggal 10.</b>\n"
                . "\n"
                . "bisa sama mas Dimas, bisa juga langsung ke mas Fuadi atau juga bisa transfer,\n"
                . "untuk nomor rekening ada di deskripsi group.\n"
                . "\n"
                . "\n"
                . "terimakasih 🙏\n"
                . "\n"
                . "wasalamualaikum.\n";

            $id = (int)$chat->telegram;

            Telegram::sendMessage([
                'chat_id' => $id,
                'parse_mode' => 'HTML',
                'text' => $text
            ]);
            }

            DB::table('notifikasi')->insert([
                'user_id' => $chat->user_id,
                'judul' => 'Hai..  Assalamualikum.. 👋👋',
                'deskripsi' => 'Alhamdulillah... gak kerasa sudah awal bulan lagi.. paling lambat tanggal 5 ya.',
                'date' => Carbon::now()->format('d-MM-YYYY');
                'status' => false,
            ]);
        }
        
        //Sesi Notifikasi Aplikasi
            
        $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

        DB::table('posision_users')->where('posision_id', 2)
            ->update([
                'status' => false,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            foreach ($notifID as $key) {
                if (!empty($key)) {
                    $fcm_key = $key->notif_fcm;

                            $token_1 = $fcm_key;

                            $data = [

                                "registration_ids" => [
                                    $token_1
                                ],

                                "notification" => [

                                    "title" => 'Hai..  Assalamualikum.. 👋👋 ' ,

                                    "body" => 'Alhamdulillah... gak kerasa sudah awal bulan lagi.. paling lambat tanggal 5 ya.',

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
