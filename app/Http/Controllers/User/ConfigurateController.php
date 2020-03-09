<?php

namespace App\Http\Controllers\User;

use App\Models\CustomCar;
use App\Models\Cars;
use App\Models\Models;
use App\Models\Order;
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
        $request->validate([
            'address' => 'required|min:3|max:30' ,
        ],[
            'address.required' => 'Заповніть поле!',
            'address.min' => 'Поле повинно бути більше 3 символів!',
            'address.max' => 'Поле повинно бути менше 30 символів!'
        ]);
        $custom_car = CustomCar::create([
            'wheels_id'  => $request->wheels_id,
            'complectation_id' => $request->complectation_id,
            'color_id' => $request->color_id,
            'interior_id' => $request->interior_id,
            'price' => '1000000',
        ]);
        $custom_car_id =  $custom_car['id'];
        $car_id = '0';
        Order::create([
            'car_id'  => $car_id,
            'user_id' => $request->user_id,
            'custom_car_id' =>$custom_car_id,
            'address' => $request->address,
        ]);
       return redirect('/');
    }

}
