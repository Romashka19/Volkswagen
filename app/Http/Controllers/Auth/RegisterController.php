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

        $this->middleware('guest');
    }

    public function showRegister(){
        return view('auth/register');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:255'],

        ]);
    }

    protected function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'access' => $request->access,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
        return redirect($this->redirectTo);

    }
}
