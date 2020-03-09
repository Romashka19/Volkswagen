<?php

namespace App\Http\Controllers\User;

use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function main(){
        $models = DB::select('select * from models');
        return view("main/index",[
            'models' => $models,
        ]);
    }

    function models(){
        $models = DB::select('select * from models');
        return view("main/models",[
            'models' => $models,
        ]);
    }

}
