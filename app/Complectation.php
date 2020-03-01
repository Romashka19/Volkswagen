<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complectation extends Model
{
    protected $fillable = ['name', 'engine_id','model_id','gearbox_id'];
}
