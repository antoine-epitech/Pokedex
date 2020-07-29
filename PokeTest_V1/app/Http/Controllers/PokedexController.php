<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pokedex;
use App\Types;
use Illuminate\Support\Facades\DB;

class PokedexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('app', 'index');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pokedex = DB::table('pokedex')
        ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
        ->get();

        var_dump($pokedex[0]);
        return response()->json($pokedex);
    }

    public function getPokemonSearch(Request $request){

        $pokedex = DB::table('pokedex')
        ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
        ->where('nom_pok', 'LIKE','%'.$request->input('search').'%')
        ->get();

        return response()->json($pokedex);
    }

    public function getPokemon($id){
        $pokedex = DB::table('pokedex')
        ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
        ->join('weaknesses', 'weaknesses.pokedex_id', '=', 'pokedex.id_pok')
        ->join('stats', 'stats.pokemon_id', '=', 'pokedex.id_pok')
        ->join('evolutions', 'evolutions.id_pok_base', '=', 'pokedex.id_pok')
        //->join('evolutions', 'evolutions.id_pok_evol', '=', 'pokedex.id_pok')
        ->where('pokedex.id_pok', '=', $id)
        ->get();

        return response()->json($pokedex);
    }

}
