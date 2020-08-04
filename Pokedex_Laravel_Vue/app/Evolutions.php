<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evolutions extends Model
{
    protected $fillable = ['id_pok_base','lvl_evol_pok'];


    public function Evolutions() 
	{
		return $this->belongsTo('App\Pokedex','id_pok_base','id_pok_evol');
	}
}
