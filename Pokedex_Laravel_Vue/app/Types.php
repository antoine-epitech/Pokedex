<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $fillable = ['id_pok','type1', 'type2'];


    public function pokedex() 
	{
		return $this->belongsTo('App\Pokedex','id_pok','id_pok');
	}
}
