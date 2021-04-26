<?php

namespace App\Http\Controllers\Pemuda;

use App\HasRole;
use App\Http\Controllers\Controller;
use App\UserPosision;
use App\User;
use Session;
use Illuminate\Http\Request;

class PemudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemuda = UserPosision::where('posision_id', 1)
        ->leftJoin('profile_users',['posision_users.user_id'=>'profile_users.user_id'])
        ->Join('posisions',['posisions.id'=>'posision_users.posision_id'])
        ->Join('users',['users.id'=>'posision_users.user_id'])
        ->get();

        // return response()->json($pemuda);


        $user = User::all();

        return view('Users.pemuda',compact('pemuda','user'));
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

        $data = $request->all();

        $pemuda = new User;
        $pemuda->name = $data['name'];
        $pemuda->email = $data['email'];
        $pemuda->password = bcrypt($data['password']);
        $pemuda->save();

        $posision = new UserPosision;
        $posision->user_id = $pemuda->id;
        $posision->posision_id = 1;
        $posision->save();

        $hasrole = new HasRole;
        $hasrole->role_id = 3;
        $hasrole->model_type = 'App\User';
        $hasrole->model_id = $pemuda->id;
        $hasrole->save();

        return back()->with(Session::flash('success', 'User pemuda tersimpan'));
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
        $user  = UserPosision::where(['user_id'=> $id]);

        if ($user->delete()) {
            Session::flash('success', 'Surat berhasil dihapus');
        }

        return back();
    }
}