<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function main(){
        return view("main/index");
    }

    function models(){
        return view("main/models");
    }
}
