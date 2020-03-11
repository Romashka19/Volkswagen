<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    protected $table = 'interiors';
    protected $fillable = ['name','material','color','price'];
}
