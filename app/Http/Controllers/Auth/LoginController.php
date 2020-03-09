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
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        $statusAuth = $this->attemptLogin($request);
        if( $statusAuth ){

            return response()->json([
                'status' => true,
                'message' => 'Successful',
                'redirect' => $this->redirectTo,
            ]);
        }
    }

    protected function attemptLogin($request){
        return $this->guard()->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ], $request->has('remember'));
    }

    protected function guard()
    {
        return Auth::guard('web');
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
