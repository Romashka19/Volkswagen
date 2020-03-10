<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cars;
use App\Models\Complectation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    function index(){
        if(Gate::allows('admin-panel')){
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
        } else {
            return view("main/index");
        }

    }

    function users (){
        if(Gate::allows('admin-panel')){
            $users = DB::select('select * from users');
            $models = DB::select('select * from models');
            $complectations = DB::select('select * from complectations');
            $cars = DB::select('select * from cars');
            return view("admin/users",[
                'users' => $users,
                'models' => $models,
                'complectations' => $complectations,
                'cars' => $cars,
            ]);
        } else {
            return view("main/index");
        }
    }

    function createCar(Request $request){
        $car = Cars::create([
            'wheels_id'  => $request->wheels_id,
            'complectation_id' => $request->complectation_id,
            'color_id' => $request->color_id,
            'interior_id' => $request->interior_id,
            'price' => $request->price,
        ]);
        return redirect('admin/index');
    }

    function createCompl(Request $request){
        $complectation = Complectation::create([
            'name'  => $request->name,
            'engine_id' => $request->engine_id,
            'model_id' => $request->model_id,
            'gearbox_id' => $request->gearbox_id,
        ]);
        return redirect('admin');
    }

    function deleteCompl($id , Request $request){
        $complectation = Complectation::find($id);
        $complectation->delete();
    }

    function deleteCar($id , Request $request){
        $car = Cars::find($id);
        $car->delete();
    }


}
