<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Auth;
use Illuminate\Http\Request;
use App\Models\Models;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function user(){
        $id = Auth::user()->id;
        $orders = \App\Models\Order::all()->sortBy($id);
        return view('auth/user',[
            'orders' => Order::find($id),
        ]);
    }
}
