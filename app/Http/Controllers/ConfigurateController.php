<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

    function createCustomCar(Request $request){
        $costom_car = Cars::create([
            'wheels_id'  => $request->wheels_id,
            'complectation_id' => $request->complectation_id,
            'color_id' => $request->color_id,
            'interior_id' => $request->interior_id,
            'price' => '1000000',
        ]);
        return view('main/index');
    }

}
