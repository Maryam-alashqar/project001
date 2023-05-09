<?php

namespace App\Http\Controllers\Auth;

use App\Models\view;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\AuthTrait;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

public function redirectTo()
{
    // $url = Redirect::intended( '/' )->getTargetUrl();

    // dd($url);
    if(Auth::user()->type == 'visitor'|| Auth::user()->type == 'user'){
        // return redirect()->intended('/');
        return '/';
    }else {
        // return redirect()->intended('/admin');
        return '/admin';
    }
}
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
