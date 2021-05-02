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
            $file->move('assets/images/news', $filename);
            File::delete('assets/images/news' . $user->dokumen);
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
