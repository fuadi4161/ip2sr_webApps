<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Events;
use App\Kalendar;
use Session;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Event.index');
    }

    public function kalendar()
    {
        return view('Kalendar.kalendar');
    }

    public function listEvents()
    {
       
        $event = Events::latest()->get();
        return response()->json($event);
    }

    public function listKalendar()
    {
       
        $event = Kalendar::latest()->get();
        return response()->json($event);
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
        
        $validation =  Validator::make($request->all(),[
            'title'=>'required',
            'start'=>'required',
            'end'=>'required',
            'allDay'=>'required',
            'color'=>'required',
            'textColor'=>'required'
        ]);

        if ($validation->failed()){
            Session::flash('error', 'Event gagal disimpan');
            return redirect()->back();
        }else{

            Session::flash('success', 'Event berhasil disimpan');
            Events::create($request->all());
            Kalendar::create($request->all());

            return redirect()->back();
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
