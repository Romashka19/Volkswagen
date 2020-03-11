<?php

namespace App\Http\Controllers\User;

use App\Models\Models;
use App\Models\Interior;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    function index($id){
        $model = Models::find($id);
        $price = $model->price;
        $complectations = DB::select('select * from complectations');
        return view('about/index',[
            'model' => Models::find($id),
            'complectations' => $complectations,
            'price' => $price,
        ]);
    }

    function createCarOrder(Request $request){
        $request->validate([
           'address' => 'required|min:3|max:30' ,
        ],[
            'address.required' => 'Заповніть поле!',
            'address.min' => 'Поле повинно бути більше 3 символів!',
            'address.max' => 'Поле повинно бути менше 30 символів!'
        ]);

        Order::create([
            'car_id'  => $request->car_id,
            'user_id' => $request->user_id,
            'custom_car_id' =>$request->custom,
            'address' => $request->address,
        ]);
        return redirect('/');
    }


}
