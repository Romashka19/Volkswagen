<?php

namespace App\Http\Controllers;

use App\Admin;
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

        return view("admin/index",[
            'engines' => $engines,
            'gearboxes' => $gearboxes,
            'models' => $models,
            'wheels' => $wheels,
            'colors' => $colors,
            'interiors' => $interiors,
            'complectations' => $complectations,

        ]);
    }

    public function create()
    {

    }

    function store(Request $request){
        Complectation::create([
            'name' => $request->name,
            'engine_id' => $request->engine_id,
            'model_id' => $request->model_id,
            'gearbox_id' => $request->gearbox_id,
        ]);
        return redirect('/admin');
    }

    function update(){

    }

    function destroy(){

    }
}
