<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Cars;
use App\Complectation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(){
        $engines = DB::select('select * from engines');
        $gearboxes = DB::select('select * from gearboxes');
        $models = DB::select('select * from models');
        $wheels = DB::select('select * from wheels');
        $colors = DB::select('select * from colors');
        $interiors = DB::select('select * from interiors');
        $complectations = DB::select('select * from complectations');
        $cars = DB::select('select * from cars');
        return view("admin/index",[
            'engines' => $engines,
            'gearboxes' => $gearboxes,
            'models' => $models,
            'wheels' => $wheels,
            'colors' => $colors,
            'interiors' => $interiors,
            'complectations' => $complectations,
            'cars' => $cars,
        ]);
    }


    function store(Request $request){
        $table_name = $request->table_name;
        if($table_name == 'comlectation'){
            Complectation::create([
                'name' => $request->name,
                'engine_id' => $request->engine_id,
                'model_id' => $request->model_id,
                'gearbox_id' => $request->gearbox_id,
            ]);
        }elseif ($table_name == 'cars'){
            Cars::create([
                'wheels_id' => $request->wheels_id,
                'complectation_id' => $request->complectation_id,
                'color_id' => $request->color_id,
                'interior_id' => $request->interior_id,
                'price' => $request->car_price
            ]);
        }
        return redirect('/admin');
    }

    function update(){

    }

    function destroy($id , Request $request){
        $table_name = $request->table_name;

        if($table_name == 'complectation'){
            $complectation = Complectation::find($id);
            $complectation->delete();
        }elseif ($table_name == 'cars'){
            $car = Cars::find($id);
            $car->delete();
        }

    }
}
