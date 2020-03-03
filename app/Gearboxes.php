<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gearboxes extends Model
{
    protected $fillable = ['name', 'type','gears_count','price'];
}
