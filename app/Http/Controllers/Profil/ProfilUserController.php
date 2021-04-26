<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\ProfilUser;
use Illuminate\Http\Request;
use App\User;
use Session;
use File;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfilUserController extends Controller
{

    public function index()
    {

        $profil = Auth::user()->profil;

        // return response()->json($profil);

        return view('Profile.index', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $filename = $user->profile_photo;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = Auth::user()->name . '_' . time() . '.' . $file->getClientOriginalName();
            $avatar = 'https://ip2sr.site/assets/images/avatars/' . Auth::user()->name . '_' . time() . '.' . $file->getClientOriginalName();
            $file->move('assets/images/avatars', $filename);
            File::delete('assets/images/avatars' . $user->dokumen);
        }



        if ($request->password == null) {
            $files = $request->file('file');
            User::where('id', $user->id)
                ->update([
                    'profile_photo' => $filename,
                    'avatar' => 'https://ip2sr.site/assets/images/avatars/' . Auth::user()->name . '_' . time() . '.' . $files->getClientOriginalName(),
                    'name' => $request->name,
                    'email' => $request->email,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
        } else {
            User::where('id', $user->id)
                ->update([
                    'profile_photo' => $filename,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
        }




        if ($filename) {
            Session::flash('berhasil', 'Profil berhasil di rubah');
        } else {
            Session::flash('error', 'Profil gagal di rubah');
        }

        return back();
    }

    public function detailprofil(Request $request, $id)
    {
        $data = DB::table('users')->where('users.id', '=', Auth::user()->id)
            ->leftJoin('langganan', 'langganan.id', '=', 'users.status_langganan')
            ->select('langganan.kecepatan', 'langganan.harga')->get();
        foreach ($data as $items) {
            $kecepatan = $items->kecepatan;
            $harga = $items->harga;
        }


        DB::table('profile_users')->insert([
            'user_id' => Auth::user()->id,
            'nama' => $request->namalengkap,
            'kontak' => $request->wa,
            'telegram' => $request->tele,
            'deskripsi' => $request->bio,
            'tanggal_lahir' => $request->ttl,
            'alamat' => $request->alamat,
            'jenkel' => $request->kelamin,
            'facebook' => $request->fb,
            'twitter' => $request->twit,
            'instagram' => $request->ins,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('status_langganan')->insert([
            'user_id' => Auth::user()->id,
            'kecepatan' => $kecepatan,
            'harga' => $harga,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return back();
    }
}
