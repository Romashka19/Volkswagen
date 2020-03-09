<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomCar extends Model
{
    protected $table = 'customcar';
    protected $fillable = ['wheels_id','complectation_id','color_id','interior_id','price'];
}
