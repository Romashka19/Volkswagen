<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    function index(){
        $cars = DB::select('select * from cars');
        return view('about/index',[
            'cars' => $cars,
        ]);
    }
}
