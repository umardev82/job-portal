<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
//    protected $redirectTo = RouteServiceProvider::DASHBOARD;


    protected function authenticated($request , $user){
        if (Auth::user()->role->role == 'super_admin')
        {
            return redirect()->route('admin.dashboard') ;
        }
        elseif (Auth::user()->role->role == 'job_provider')
        {
            return redirect()->route('company.dashboard') ;
        }
        elseif (Auth::user()->role->role == 'job_seeker')
        {
            return redirect()->route('user.dashboard') ;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
