<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use App\User;
use DB;
use Session;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $berita = DB::table('berita')->get();
        $galery = DB::table('galery')->get();


        return view('Medias.berita', compact('berita','galery'));

        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita()
    {
        return view('Medias.berita');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createberita(Request $request)
    {

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalName();
            $avatar = 'https://ip2sr.site/assets/images/news/' . time() . '.' . $file->getClientOriginalName();
            $file->move('assets/images/news', $filename);
            File::delete('assets/images/news' . $user->dokumen);
        }


        DB::table('berita')->insert([
            'author_id' => Auth::user()->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'images' => $avatar,
            'link' => $request->link,
            'backgrund_image' => $request->images,
        ]);

        $notifID = DB::table('users')->get();

        $SERVER_API_KEY = 'AAAAXwc3hQ0:APA91bGWHOSNXP2oxdwLGq7e6tLx9H7IY4cFkPBuZzIRaqTMzZo5EDdyUlC6_TCgrtwasgfQUmArnLOJe-wqoAY0yn02Dpu_sjPORMT7KLFcRxF0FtQRiCHo87afnXOTwWixOb2OFezM';

            foreach ($notifID as $key) {
                if (!empty($key)) {
                    $fcm_key = $key->notif_fcm;

                            $token_1 = $fcm_key;

                            $data = [

                                "registration_ids" => [
                                    $token_1
                                ],

                                "notification" => [

                                    "title" => '(info) '.$request->judul ,

                                    "body" => $request->deskripsi,

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
                    }
            }

        // return response()->json($request);

        return back()->with( Session::flash('success', 'berita berhasil ditambahkan.'));
    }

    public function deleteBerita($id){

        DB::table('berita')->where('id',$id)->delete();

        return back()->with( Session::flash('success', 'berita berhasil dihapus.'));
    }

    public function editMoto()
    {
        //
    }

    public function addGallery(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalName();
            $avatar = 'https://ip2sr.site/assets/images/news/' . time() . '.' . $file->getClientOriginalName();
            $file->move('galery', $filename);
            File::delete('galery' . $user->dokumen);
        }


        DB::table('galery')->insert([
            'user_id' => Auth::user()->id,
            'caption' => $request->caption,
            'foto' => $filename,
            'url' =>  $avatar,
        ]);

        return back()->with( Session::flash('success', 'Foto berhasil di simpan.'));
    }

    public function deleteGallery($id){

        DB::table('galery')->where('id',$id)->delete();

        return back()->with( Session::flash('success', 'berhasil dihapus.'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
