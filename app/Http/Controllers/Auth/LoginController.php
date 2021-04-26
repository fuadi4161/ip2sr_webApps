<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {


        if($user->hasRole('super-admin')){
            return redirect()->route('super.dashboard-pemuda');
        }elseif($user->hasRole('admin')){
            return redirect()->route('admin.dashboard');
        }elseif($user->hasRole('pemuda')){
            return redirect()->route('pemuda.dashboard');
        }elseif($user->hasRole('bendahara')){
            return redirect()->route('bendahara.dashboard');
        }elseif($user->hasRole('sekertaris')){
            return redirect()->route('sekertaris.dashboard');
        }elseif($user->hasRole('admin-wifi')){
            return redirect()->route('admin-wifi.dashboard');
        }elseif($user->hasRole('wifi')){
            return redirect()->route('wifi.dashboard');
        }

    

    }
}
