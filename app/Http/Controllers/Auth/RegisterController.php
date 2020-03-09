<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '';

    public function __construct()
    {
        $this->redirectTo = route('authLogin');
        $this->middleware('guest');
    }

    public function showRegister(){
        return view('auth/register');
    }

    protected function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $register = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'access' => $request->access,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Successful',
            'redirect' => $this->redirectTo
        ]);
    }
}
