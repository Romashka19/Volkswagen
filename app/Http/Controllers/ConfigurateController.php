<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigurateController extends Controller
{
    function index(){
        $complectations = DB::select('select * from complectations');
        $wheels = DB::select('select * from wheels');
        $interiors = DB::select('select * from interiors');
        $colors = DB::select('select * from colors');
        return view('configurate/index',[
            'complectations' => $complectations,
            'wheels' => $wheels,
            'interiors' => $interiors,
            'colors' => $colors,
        ]);
    }

    function store(Request $request){
        $create_car = new Cars();
        $create_car->wheels_id = $request->wheels_id;
        $create_car->complectation_id = $request->complectation_id;
        $create_car->color_id = $request->color_id;
        $create_car->interior_id = $request->interior_id;
        $create_car->price = $request->price;
        $create_car->save();
    }
}
