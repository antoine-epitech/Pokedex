<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'user_id','pok_id','name'
    ];

    public function pokedex(){
		return $this->belongsTo('App\Pokedex','pok_id','App\User','user_id');
    }
}
