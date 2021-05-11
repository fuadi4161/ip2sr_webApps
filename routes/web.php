<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserNotification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/registrasi', 'HomeController@contact')->name('home.contact');
Route::post('/registrasipost', 'HomeController@registrasi')->name('home.postreagistrasi');
Route::get('/about', 'HomeController@about')->name('home.about');

// Route::get('mail', function () {
    

//     $detail = [
//             'name' => 'Harsukh Makwana',
//             'info' => 'Laravel & Python Devloper'
//         ];

//         // \Mail::raw('Selamat datang', function ($massage) use($detail){
//         //     $massage->to('fuadi@gmail.com');
//         //     $massage->subject('Selamat anda sudah terdaftar ');
//         // });
    
//         \Mail::to('fuadznice@gmail.com')->send(new \App\Mail\NewUserNotification($detail));
    
//         dd("success");
    
  

// //     $activity = Telegram::getUpdates();
// //         // return response()->json($activity);
// //     $text = "Permintaan konfirmasi Iuran\n"
// //             . "<b>Dari: </b>\n"
// //             . "<b>Fuadz</b>\n"
// //             . "<b>Message: </b>\n"
// //             . "Percobaan";

// //         Telegram::sendMessage([
// //             'chat_id' => 946271444,
// //             'parse_mode' => 'HTML',
// //             'text' => $text
// //         ]);
// });
// Route::get('notifikasi', function () {

//     $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

//     $token_1 = 'dWHF6jCtRmqMPKiYxmbjvs:APA91bGuLasc13vhD7lTrkBt8sbBnEDuvQoZSHdYXPuRVcSsdlRhbA7rttO7BQtZ49iUaxBZCBAtd-qPSn72pcJSwU76BiV2c15O8CZchEf3HLO3eZpTuPVAnfLMSMrr6JRU4Th5Alq6';

//     $data = [

//         "registration_ids" => [
//             $token_1
//         ],

//         "notification" => [

//             "title" => 'Terima kasih..',

//             "body" => 'Iuran Anda Sudah di konfirmasi',

//             "image" => 'https://i.pinimg.com/564x/ba/0b/0e/ba0b0eac27f6f88a70c084df11c52eab.jpg',

//             "sound" => 'stoneSkimingDay4', // required for sound on ios

//         ],

//     ];

//     $dataString = json_encode($data);

//     $headers = [

//         'Authorization: key=' . $SERVER_API_KEY,

//         'Content-Type: application/json',

//     ];

//     $ch = curl_init();

//     curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

//     curl_setopt($ch, CURLOPT_POST, true);

//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

//     $response = curl_exec($ch);

//     dd($response);
// });




Route::group(
    ['prefix' => 'superadmin', 'middleware' => ['role:super-admin']],
    function () {

        Route::get('/', 'SuperAdmin\SuperadminController@index')->name('super.dashboard-pemuda');
        Route::get('/network', 'SuperAdmin\SuperadminController@index2')->name('super.dashboard-network');
        Route::get('/profil', 'Profil\ProfilUserController@index')->name('super.profil');
        Route::get('/users', 'User\UserController@index')->name('super.users');
        Route::get('/pemuda-user', 'Pemuda\PemudaController@index')->name('super.users-pemuda');
        Route::get('/wifi-user', 'User_wifi\UserWifiController@index')->name('super.users-wifi');
        Route::post('/add-user-pemuda', 'Pemuda\PemudaController@store')->name('super.add-user-pemuda');
        Route::get('/user-pemuda/hapus/{user}', 'Pemuda\PemudaController@destroy')->name('super.hapus-user-pemuda');
        Route::post('/add-user-wifi', 'User_wifi\UserwifiController@store')->name('super.add-user-wifi');
        Route::post('/add-admin-wifi', 'User_wifi\UserwifiController@adminwifi')->name('super.add-admin-wifi');
        Route::patch('/update-profil/{user}', 'Profil\ProfilUserController@update')->name('super.update-profil');

        //Event Disposisi User
        Route::get('/users/{id}/{kategori}', 'Disposisi\DisposisiController@create')->name('super.disposisi-user');

        //promote users
        Route::get('/promote/{id}/{kategori}', 'Disposisi\DisposisiController@toSuper')->name('super.disposisi-super');

        //notulis
        Route::get('/notulen', 'Notulen\NotulenController@index')->name('super.notulen');
        Route::post('/add-notulen', 'Notulen\NotulenController@store')->name('super.add-note');
        Route::get('/edit-notulen/{id}', 'Notulen\NotulenController@edit')->name('super.edit-note');
        Route::patch('/update-notulen/{id}', 'Notulen\NotulenController@update')->name('super.update-note');
        Route::get('/detail-notulen/{id}', 'Notulen\NotulenController@show')->name('super.detail-note');
        Route::get('/delete-notulen/{id}', 'Notulen\NotulenController@destroy')->name('super.hapus-note');

        //Media
        Route::get('/media', 'Media\MediaController@index')->name('super.media');


        //Event
        Route::get('/event', 'Event\EventController@index')->name('super.event');
        Route::get('/jsonevent', 'Event\EventController@listEvents')->name('super.eventlist');
        Route::post('/event/add', 'Event\EventController@store')->name('super.event-add');
        
        
        Route::get('/kalendar', 'Event\EventController@kalendar')->name('super.kalendar');
        Route::get('/jsonkalendar', 'Event\EventController@listKalendar')->name('super.kalendarlist');
        
        //Berita
        Route::get('/berita', 'Media\MediaController@berita')->name('super.berita');
        Route::post('/addberita', 'Media\MediaController@createberita')->name('super.addberita');
        Route::get('/deleteberita/{id}', 'Media\MediaController@deleteBerita')->name('super.deleteberita');
        
        //Gallery
        Route::post('/addgalery', 'Media\MediaController@addGallery')->name('super.addgalery');
        Route::get('/deletegalery/{id}', 'Media\MediaController@deleteGallery')->name('super.deletegalery');
        
        
        //Agenda
        Route::get('/agenda', 'Agenda\AgendaController@index')->name('super.agenda');
        Route::get('/jsonagenda', 'Agenda\AgendaController@listAgenda')->name('super.agendalist');
        Route::post('/agenda/add', 'Agenda\AgendaController@store')->name('super.agenda-add');

        //Arisan
        Route::get('/arisan', 'Arisan\ArisanController@index')->name('super.arisan');
        Route::get('/arisan/detail/{id}', 'Arisan\ArisanController@show')->name('super.arisan-detail');


        //Keuangan
        Route::get('/keuangan-pemuda', 'Keuangan\KeuanganController@pemuda')->name('super.keuangan-pemuda');
        Route::get('/keuangan-wifi', 'Keuangan\KeuanganController@wifi')->name('super.keuangan-wifi');
        Route::post('/keuangan-out', 'Keuangan\KeuanganController@saveout')->name('super.keuangan-pemuda-out');
        Route::post('/keuangan-in', 'Keuangan\KeuanganController@savein')->name('super.keuangan-pemuda-in');

        //User Wifi
        Route::get('/status/{status}/{id}', 'User_wifi\UserWifiController@status')->name('super.ubah-status');
        Route::post('/generate-status-1', 'User_wifi\UserWifiController@status1generate')->name('super.generate-status-1');
        Route::post('/generate-status-0', 'User_wifi\UserWifiController@status0generate')->name('super.generate-status-0');
    }
);


Route::group(
    ['prefix' => 'admin', 'middleware' => ['role:admin']],
    function () {


        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');

        Route::get('/pemuda-user', 'Pemuda\PemudaController@index')->name('admin.users-pemuda');

        //profile
        Route::patch('/update-profil/{user}', 'Profil\ProfilUserController@update')->name('admin.update-profil');

        //notulis
        Route::get('/notulen', 'Notulen\NotulenController@index')->name('admin.notulen');
        Route::post('/add-notulen', 'Notulen\NotulenController@store')->name('admin.add-note');

        //Keuangan
        Route::get('/keuangan-pemuda', 'Keuangan\KeuanganController@pemuda')->name('admin.keuangan-pemuda');
        Route::post('/keuangan-out', 'Keuangan\KeuanganController@saveout')->name('admin.keuangan-pemuda-out');
        Route::post('/keuangan-in', 'Keuangan\KeuanganController@savein')->name('admin.keuangan-pemuda-in');

        //Event
        Route::get('/event', 'Event\EventController@index')->name('admin.event');
        Route::get('/jsonevent', 'Event\EventController@listEvents')->name('admin.eventlist');
        Route::post('/event/add', 'Event\EventController@store')->name('admin.event-add');


        //Agenda
        Route::get('/agenda', 'Agenda\AgendaController@index')->name('admin.agenda');
        Route::get('/jsonagenda', 'Agenda\AgendaController@listAgenda')->name('admin.agendalist');
        Route::post('/agenda/add', 'Agenda\AgendaController@store')->name('admin.agenda-add');

        //Arisan
        Route::get('/arisan', 'Arisan\ArisanController@index')->name('admin.arisan');
        Route::get('/arisan/detail/{id}', 'Arisan\ArisanController@show')->name('admin.arisan-detail');
    }
);


Route::group(
    ['prefix' => "pemuda-ip2sr", 'middleware' => ['role:pemuda']],
    function () {


        Route::get('/', 'Pemuda\HomeController@index')->name('pemuda.dashboard');
        //profile
        Route::get('/profil', 'Profil\ProfilUserController@index')->name('pemuda.profil');
        Route::patch('/update-profil/{user}', 'Profil\ProfilUserController@update')->name('pemuda.update-profil');
    }
);


Route::group(
    ['prefix' => 'bendahara', 'middleware' => ['role:bedahara']],
    function () {

        Route::get('/', 'User\UserController@index')->name('bendahara.dashboard');

        //profile
        Route::patch('/update-profil/{user}', 'Profil\ProfilUserController@update')->name('bendahara.update-profil');
    }
);
Route::group(
    ['prefix' => 'sekertaris', 'middleware' => ['role:sekertaris']],
    function () {

        Route::get('/', 'User\UserController@index')->name('sekertaris.dashboard');

        //profile
        Route::patch('/update-profil/{id}', 'Profil\ProfilUserController@update')->name('sekertaris.update-profil');
    }
);
Route::group(
    ['prefix' => 'admin-wifi', 'middleware' => ['role:admin-wifi']],
    function () {

        Route::get('/', 'Admin_wifi\AdminwifiController@index')->name('admin-wifi.dashboard');
        Route::patch('/detail-profil/{id}', 'Profil\ProfilUserController@detailprofil')->name('admin-wifi.detail-profil');
        Route::get('/Pembayaran', 'Wifi\PembayaranController@index')->name('admin-wifi.pembayaran');

        //profile
        Route::patch('/update-profil/{id}', 'Profil\ProfilUserController@update')->name('admin-wifi.update-profil');

        //User Wifi
        Route::get('/wifi-user', 'User_wifi\UserWifiController@index')->name('admin-wifi.users-wifi');
        Route::get('/status/{status}/{id}', 'User_wifi\UserWifiController@status')->name('admin-wifi.ubah-status');
        Route::post('/generate-status-1', 'User_wifi\UserWifiController@status1generate')->name('admin-wifi.generate-status-1');
        Route::post('/generate-status-0', 'User_wifi\UserWifiController@status0generate')->name('admin-wifi.generate-status-0');
        Route::get('/laporan', 'Wifi\PembayaranController@laporan')->name('admin-wifi.laporan');

        Route::get('/accpayment/{id}/{users}', 'Wifi\PembayaranController@update')->name('admin-wifi.accpayment');
        Route::post('/payment', 'User_wifi\UserWifiController@bayar')->name('admin-wifi.payment');
    }
);
Route::group(
    ['prefix' => 'member-wifi', 'middleware' => ['role:wifi']],
    function () {

        Route::get('/', 'Wifi\WifiController@index')->name('wifi.dashboard');
        Route::patch('/detail-profil/{id}', 'Profil\ProfilUserController@detailprofil')->name('wifi.detail-profil');
        //profile
        Route::patch('/update-profil/{id}', 'Profil\ProfilUserController@update')->name('wifi.update-profil');

        //Pembayaran
        Route::get('/Pembayaran', 'Wifi\PembayaranController@index')->name('wifi.pembayaran');
        Route::post('/payment', 'User_wifi\UserWifiController@bayar')->name('wifi.payment');
    }
);
Route::group(
    ['prefix' => 'users', 'middleware' => ['role:user']],
    function () {

        Route::get('/', 'User\UserController@index')->name('user.dashboard');
    }
);