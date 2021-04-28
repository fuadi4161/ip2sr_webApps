<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiProfilController extends Controller
{
    public function profil(Request $request){

    	$pesan = $request->pesan; 
    	$value = $request->value;


    	if ( $pesan == 'username') {
    	 	DB::table('users')->where('id', Auth::user()->id)
    	 	->update([
                'name' => $value,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

                return response()->json([
                'success' => true,
                'data' => $data,
                'pesan' => 'Berhasil'
            ]);

    	 }elseif($pesan == 'email') {
    	 	DB::table('users')->where('id', Auth::user()->id)
    	 	->update([
                'email' => $value,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);


                return response()->json([
                'success' => true,
                'data' => $data,
                'pesan' => 'Berhasil'
            ]);
    	 }elseif ($pesan == 'password') {
    	 	DB::table('users')->where('id', Auth::user()->id)
    	 	->update([
                'password' => bcrypt($value),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

                return response()->json([
                'success' => true,
                'data' => $data,
                'pesan' => 'Berhasil'
            ]);
    	 }
    	  

    }
}
