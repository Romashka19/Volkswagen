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
        $create_car = new Cars();
        $create_car->wheels_id = $request->wheels_id;
        $create_car->complectation_id = $request->complectation_id;
        $create_car->color_id = $request->color_id;
        $create_car->interior_id = $request->interior_id;
        $create_car->price = $request->price;
        $create_car->save();
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
