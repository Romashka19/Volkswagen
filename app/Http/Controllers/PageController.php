<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function main(){
        return view("main/index");
    }

    function models(){
        $cars = DB::select('select * from cars');
        return view("main/models",[
            'cars' => $cars,
        ]);
    }

}
