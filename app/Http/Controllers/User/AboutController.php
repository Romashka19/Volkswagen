<?php

namespace App\Http\Controllers\User;

use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    function index($id){
        $model = Models::find($id);
        $complectations = DB::select('select * from complectations');
        $engines = DB::select('select * from engines');
        $cars = DB::select('select * from cars');
        return view('about/index',[
            'model' => Models::find($id),
            'complectations' => $complectations,
            'engines' => $engines,
            'cars' => $cars,
        ]);
    }
}
