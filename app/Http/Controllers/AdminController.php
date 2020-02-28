<?php

namespace App\Http\Controllers;

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

    function store(){
        $complectations = DB::select('select * from complectations');
/*
        $complectations->engine_id = \request('id_engine');
        $complectations->gearbox_id = \request('id_gearbox');
        $complectations->model_id = \request('id_model');

        $complectations->save();
*/
    }

    function update(){

    }

    function delete(){

    }
}
