<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engines extends Model
{
    protected $fillable = ['name', 'volume','power','fuel','price'];

}
