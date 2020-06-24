<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cars extends Model
{
    protected $fillable = ['wheels_id','complectation_id','color_id','interior_id','price'];

    function colors(){
        return $this->belongsTo(
            Colors::class,
            'color_id',
            'id'
        );
    }

    function complectations(){
        return $this->belongsTo(
            Complectation::class,
            'complectation_id',
            'id'
        );
    }

    function wheels(){
        return $this->belongsTo(
            Wheels::class,
            'wheels_id',
            'id'
        );
    }

    function interior(){
        return $this->belongsTo(
            Interior::class,
            'interior_id',
            'id'
        );
    }

}
