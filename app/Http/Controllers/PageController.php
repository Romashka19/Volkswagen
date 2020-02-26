<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function main(){
        return view("main");
    }

    function models(){
        return view("models");
    }
}
