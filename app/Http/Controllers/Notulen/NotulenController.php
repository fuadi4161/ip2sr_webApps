<?php

namespace App\Http\Controllers\Notulen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\KasKeluar;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Notulen;
use File;
use Illuminate\Support\Facades\Redirect;

class NotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kaskeluar = KasKeluar::latest()->paginate(2);

        // $notes = Notulen::all();

        $chatID = DB::table('profile_users')
            ->select('telegram')
            ->get();

        return response()->json($chatID);

        // foreach ($chatID as $cat) {
        //     return response()->json((int)$cat->telegram);
        // }




        return view('Notulen.index', compact('kaskeluar', 'notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'mimes:pdf,jpg,png,jpeg',
            'note' => 'required',
            'judul_pertemuan' => 'required',
        ]);


        if ($request->has('file')) {
            $dokumen = $request->file('file');
            $name = Auth::user()->name . '_' . time();
            $fileName = $name . '.' . $dokumen->getClientOriginalName();

            $folder = 'file/dokumen';
            // $filePath = $dokumen->storeAs( $fileName, 'public');
            $filePath = $dokumen->move($folder, $fileName, 'public');

            DB::table('notulen')->insert([
                'kas_keluar' => $request->kas_keluar,
                'judul_pertemuan' => $request->judul_pertemuan,
                'note' => $request->note,
                'document' => $fileName,
                'author_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);


            if ($filePath) {
                Session::flash('success', 'Notulen berhasil disimpan');
            } else {
                Session::flash('error', 'Notulen Gagal Tersimpan');
            }

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notes = Notulen::findOrFail($id);

        return view('Notulen.detail', compact('notes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Notulen::findOrFail($id);
        $kaskeluar = KasKeluar::latest()->paginate(2);

        return view('Notulen.edit', compact('notes', 'kaskeluar'));
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
        $notes = Notulen::find($id);
        $fileName = $notes->document;

        if ($request->has('file')) {

            $dokumen = $request->file('file');
            $name = Auth::user()->name . '_' . time();
            $fileName = $name . '.' . $dokumen->getClientOriginalName();

            $folder = 'file/dokumen';
            // $filePath = $dokumen->storeAs( $fileName, 'public');
            $filePath = $dokumen->move($folder, $fileName, 'public');

            File::delete('file/dokumen' . $notes->documen);

            Notulen::where('id', $notes->id)
                ->update([
                    'kas_keluar' => $request->kas_keluar,
                    'judul_pertemuan' => $request->judul_pertemuan,
                    'note' => $request->note,
                    'document' => $fileName,
                    'author_id' => Auth::user()->id,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);


            if ($filePath) {
                Session::flash('success', 'Notulen berhasil diupdate');
            } else {
                Session::flash('error', 'Notulen Gagal Terupdate');
            }
        }

        return Redirect('superadmin/notulen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notes  = Notulen::find($id);

        if ($notes->delete()) {
            Session::flash('success', 'Notulen berhasil dihapus');
        }

        return back();
    }
}
