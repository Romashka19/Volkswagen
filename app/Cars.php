<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = ['name', 'wheels_id','complectation_id','color_id','interior_id','price'];
}
