<?php

namespace App;

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
}
