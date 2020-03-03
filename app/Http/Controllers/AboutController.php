<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    function index($id){
        $model = \App\Models::find($id);
        $complectations = DB::select('select * from complectations');
        $engines = DB::select('select * from engines');
        return view('about/index',[
            'model' => \App\Models::find($id),
            'complectations' => $complectations,
            'engines' => $engines,
        ]);
    }
}
