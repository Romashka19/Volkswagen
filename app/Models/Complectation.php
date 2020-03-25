<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complectation extends Model
{
    protected $fillable = ['name', 'engine_id','model_id','gearbox_id'];

    function engines(){
        return $this->belongsTo(
            Engines::class,
            'engine_id',
            'id'
        );
    }
    function gearboxes(){
        return $this->belongsTo(
            Gearboxes::class,
            'gearbox_id',
            'id'
        );
    }

    function models(){
        return $this->belongsTo(
            Models::class,
            'model_id',
            'id'
        );
    }

    function cars(){
        return $this->hasMany(
            Cars::class,
            'complectation_id',
            'id'
        );
    }
}
