<?php

namespace App\Http\Controllers\User;

use App\Models\Cars;
use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConfigurateController extends Controller
{
    function index($id){
        $model = Models::find($id);
        $complectations = DB::select('select * from complectations');
        $wheels = DB::select('select * from wheels');
        $interiors = DB::select('select * from interiors');
        $colors = DB::select('select * from colors');
        return view('configurate/index',[
            'model' => Models::find($id),
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

        return redirect('/');
    }

}
