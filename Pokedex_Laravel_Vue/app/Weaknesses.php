<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weaknesses extends Model
{
    protected $fillable = [
        'pokemon_id','bug','dragon','electric','fairy','fight','fire','flying','ghost','grass','ground', 'ice','normal','poison','psychic','rock','steel','rock','water'
    ];

    public function pokedex(){
		return $this->belongsTo('App\Pokedex','pokemon_id');
    }
}
