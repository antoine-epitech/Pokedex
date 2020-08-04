<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $fillable = ['pokemon_id', 'hp', 'attack', 'defense','sp_attack','sp_defense', 'speed'];


    public function Stats() 
	{
		return $this->belongsTo('App\Pokedex','pokemon_id');
	}
}
