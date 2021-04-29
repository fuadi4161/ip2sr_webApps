<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/user', 'Api\ApiLoginController@user');
    Route::get('/payment', 'Api\ApiLoginController@payment');
    Route::get('/status', 'Api\ApiLoginController@payinet');
    Route::get('/datainet', 'Api\ApiLoginController@datainet');
    Route::get('/adminUser', 'Api\ApiLoginController@adminuser');
    Route::post('/payment-post', 'Api\ApiLoginController@paymentpost');
    Route::get('/friends', 'Api\ApiLoginController@teman');
    Route::get('/laporan', 'Api\ApiLoginController@laporan');
    Route::get('/laporanadmin', 'Api\ApiLoginController@laporanadmin');
    Route::post('/updatelaporan', 'Api\ApiLoginController@update');
    Route::get('/lunas', 'Api\ApiLoginController@usersLunas');
    Route::get('/panding', 'Api\ApiLoginController@usersPanding');
    Route::post('/statusTrue', 'Api\ApiLoginController@statusTrue');
    Route::post('/statusFalse', 'Api\ApiLoginController@statusFalse');
    Route::post('/fcmToken', 'Api\ApiLoginController@fcmToken');
    Route::get('/notif', 'Api\ApiLoginController@notifikasi');
    Route::post('/notifRead', 'Api\ApiLoginController@notifRead');
    Route::get('/payallusers/{bulan}', 'Api\ApiLoginController@paymentAllUsers');
    Route::get('/delete/{id}', 'Api\ApiLoginController@paymentAllUsersdelete');
    Route::get('/berita', 'Api\ApiLoginController@berita');
    Route::get('/opsi', 'Api\ApiLoginController@IuranOption');
    Route::get('/userscont', 'Api\ApiLoginController@userCount');
    Route::post('/updateProfil', 'Api\ApiProfilController@profile');
});
Route::post('login', 'Api\ApiLoginController@login');