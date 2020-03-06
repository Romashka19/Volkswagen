<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function main(){
        return view("main/index");
    }

    function models(){
        $models = DB::select('select * from models');
        return view("main/models",[
            'models' => $models,
        ]);
    }

}
