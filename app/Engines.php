<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engines extends Model
{
    protected $fillable = ['name', 'volume','power','fuel','price'];

}
