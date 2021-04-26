<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Langganan;
use App\UserPosision;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class SuperadminController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userwifi = UserPosision::where('posision_id', 2)
            ->leftJoin('profile_users', ['posision_users.user_id' => 'profile_users.user_id'])
            ->leftJoin('posisions', ['posisions.id' => 'posision_users.posision_id'])
            ->leftJoin('users', ['users.id' => 'posision_users.user_id'])
            ->get();


        return view('Superadmin.dashboardPemuda', compact('userwifi'));
    }
    public function index2()
    {
        $userwifi = UserPosision::where('posision_id', 2)
            ->leftJoin('profile_users', ['posision_users.user_id' => 'profile_users.user_id'])
            ->leftJoin('posisions', ['posisions.id' => 'posision_users.posision_id'])
            ->leftJoin('users', ['users.id' => 'posision_users.user_id'])
            ->get();


        return view('Superadmin.dashboardNetwork', compact('userwifi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function header()
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
