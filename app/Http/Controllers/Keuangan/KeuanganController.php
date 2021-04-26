<?php

namespace App\Http\Controllers\Keuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\DetailBarang;
use App\KasKeluar;
use App\KasMasuk;
use PhpParser\Node\Expr\FuncCall;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pemuda()
    {
        $kaskeluar = KasKeluar::latest()->paginate(2);

        $kasmasuk = KasMasuk::latest()->paginate(2);

        return view('Keuangan.pemuda', compact('kaskeluar','kasmasuk'));
    }
    public function saveout(Request $request)
    {
        $data=$request->all();

        $lastid= KasKeluar::create($data)->id;
        

        if(count($request->item) > 0)
        {
            foreach($request->item as $item=>$v){
                $data2=array(
                    'kas_keluar_id'=>$lastid,
                    'item'=>$request->item[$item],
                    'qty'=>$request->qty[$item],
                    'harga'=>$request->harga[$item],
                    'total'=>$request->total[$item],
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                );
            DetailBarang::insert($data2);
            }

        }

        // return response()->json($data);

        return back()->with( Session::flash('success','laporan pengeluaran berhasil di simpan'));

    }

    public function savein(Request $request)
    {
         DB::table('kas_masuk')->insert([
             'deskripsi' => $request->deskripsi,
             'nominal' => $request->nominal,
             'sumber' => $request->sumber,
             'author_id' => Auth::user()->id,
             'created_at'=>date('Y-m-d H:i:s'),
             'updated_at'=>date('Y-m-d H:i:s'),
         ]);

        return back()->with(Session::flash('success','berhasil di simpan.'));

    }


    public function wifi()
    {
        return view('Keuangan.wifi');
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
