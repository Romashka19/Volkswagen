<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = '';

    public function __construct()
    {
        $this->redirectTo = route('mainPage');
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $statusAuth = $this->attemptLogin($request);
        if( $statusAuth ){
            return redirect($this->redirectTo);
        }
        return response()->json([
            'status' => false,
            'message' => 'Login and password incorrect'
        ]);
    }

    protected function attemptLogin($request){
        return $this->guard()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ], $request->has('remember'));
    }

    public function showLogin()
    {
        return view('auth/login');
    }

    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect($this->redirectTo);
    }
}
