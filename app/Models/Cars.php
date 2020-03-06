<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = ['wheels_id','complectation_id','color_id','interior_id','price'];

}
