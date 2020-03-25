<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['car_id','user_id','custom_car_id','address'];

    function cars(){
        return $this->belongsTo(
            Cars::class,
            'complectation_id',
            'id'
        );
    }
    function custom_cars(){
        return $this->belongsTo(
            CustomCar::class,
            'custom_car_id',
            'id'
        );
    }
}
