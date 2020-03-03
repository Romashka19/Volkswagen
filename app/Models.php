<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = ['name', 'price','photo','other_text','tagline','title_first','text_first','title_second','text_second'];

    function complectations(){
        return $this->hasMany(
            Complectation::class,
            'model_id',
            'id'
        );
    }
}
