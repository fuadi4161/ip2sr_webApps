<?php

namespace App\Http\Controllers\Disposisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\UserPosision;
use App\HasRole;
use Session;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $kategori)
    {
        if ($kategori == 'pemuda') {

            $posision = new UserPosision;
            $posision->user_id = $id;
            $posision->posision_id = 1;
            $posision->save();

            $hasrole = new HasRole;
            $hasrole->role_id = 3;
            $hasrole->model_type = 'App\User';
            $hasrole->model_id = $id;
            $hasrole->save();
        } elseif ($kategori == 'wifi') {

            $posision = new UserPosision;
            $posision->user_id = $id;
            $posision->posision_id = 2;
            $posision->save();

            $hasrole = new HasRole;
            $hasrole->role_id = 8;
            $hasrole->model_type = 'App\User';
            $hasrole->model_id = $id;
            $hasrole->save();
        }

        return back()->with(Session::flash('success', 'User berhasil di disposisi'));
    }
    public function toSuper($id, $kategori)
    {
        $cek = HasRole::where('model_id', $id)->get();

        if ($kategori == 'admin-wifi') {

            if($cek->isEmpty()){

                $posision = new UserPosision;
                $posision->user_id = $id;
                $posision->posision_id = 2;
                $posision->save();

                $hasrole = new HasRole;
                $hasrole->role_id = 3;
                $hasrole->model_type = 'App\User';
                $hasrole->model_id = $id;
                $hasrole->save();
            
            }else{

               DB::table('model_has_roles')->where('model_id', $id)
                        ->update([
                            'role_id' => 7,
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                DB::table('posision_users')->where('user_id', $id)
                ->update([
                    'posision_id' => 2,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            

            

        }elseif($kategori == 'admin'){
             if($cek->isEmpty()){

            $posision = new UserPosision;
            $posision->user_id = $id;
            $posision->posision_id = 1;
            $posision->save();

            $hasrole = new HasRole;
            $hasrole->role_id = 3;
            $hasrole->model_type = 'App\User';
            $hasrole->model_id = $id;
            $hasrole->save();
            }else{

               DB::table('model_has_roles')->where('model_id', $id)
                        ->update([
                            'role_id' => 2,
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                DB::table('posision_users')->where('user_id', $id)
                ->update([
                    'posision_id' => 2,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }

        }elseif($kategori == 'bendahara'){
             if($cek->isEmpty()){

            $posision = new UserPosision;
            $posision->user_id = $id;
            $posision->posision_id = 1;
            $posision->save();

            $hasrole = new HasRole;
            $hasrole->role_id = 3;
            $hasrole->model_type = 'App\User';
            $hasrole->model_id = $id;
            $hasrole->save();
            }else{

               DB::table('model_has_roles')->where('model_id', $id)
                        ->update([
                            'role_id' => 4,
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                DB::table('posision_users')->where('user_id', $id)
                ->update([
                    'posision_id' => 2,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }

        }elseif($kategori == 'sekertaris'){
             if($cek->isEmpty()){

            $posision = new UserPosision;
            $posision->user_id = $id;
            $posision->posision_id = 1;
            $posision->save();

            $hasrole = new HasRole;
            $hasrole->role_id = 3;
            $hasrole->model_type = 'App\User';
            $hasrole->model_id = $id;
            $hasrole->save();
            }else{

               DB::table('model_has_roles')->where('model_id', $id)
                        ->update([
                            'role_id' => 5,
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                DB::table('posision_users')->where('user_id', $id)
                ->update([
                    'posision_id' => 2,
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }

            

            return back()->with(Session::flash('success', 'User berhasil di promosikan'));
    
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
