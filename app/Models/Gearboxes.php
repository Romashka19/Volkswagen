<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gearboxes extends Model
{
    protected $fillable = ['name', 'type','gears_count','price'];
}
