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
   // use AuthTrait;


  /*  public function loginform($type)
    {
        return view('auth.login', compact('type'));
    }

    public function login(Request $request)
    {

        if (Auth::guard($this->checkGuard($request))
            ->attempt(['email' => $request->email, 'password' => $request->password])
        ) {
            $this->redirect($request);
        }
    }

    public function logout(Request $request, $type)
    {
        Auth::guard($type)->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
*/
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
