<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    protected $fillable = [
        'id_pok', 'nom_pok',
    ];

    public function types(){
        return $this->hasMany('App\Types');     
    }
 
}

