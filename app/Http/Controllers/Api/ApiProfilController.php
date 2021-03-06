<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiProfilController extends Controller
{
    public function profile(Request $request){

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
                'pesan' => 'Berhasil update username'
            ]);

    	 }elseif($pesan == 'email') {
    	 	DB::table('users')->where('id', Auth::user()->id)
    	 	->update([
                'email' => $value,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);


                return response()->json([
                'success' => true,
                'pesan' => 'Berhasil update email'
            ]);
    	 }elseif ($pesan == 'password') {
    	 	DB::table('users')->where('id', Auth::user()->id)
    	 	->update([
                'password' => bcrypt($value),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

                return response()->json([
                'success' => true,
                'pesan' => 'Berhasil update password'
            ]);
    	 }elseif ($pesan == 'fullname') {
    	 	DB::table('profile_users')->where('user_id', Auth::user()->id)
    	 	->update([
                'nama' => $value,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

                return response()->json([
                'success' => true,
                'pesan' => 'Berhasil update fullname'
            ]);
    	 }
    	  

    }
}
