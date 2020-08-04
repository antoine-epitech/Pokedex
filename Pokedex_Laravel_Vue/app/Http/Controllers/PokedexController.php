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
        ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')->get();

      //  $tabPokedex = [];

       /* foreach($pokedex as $pok){
            $lePok = array(
                'id_pok' => $pok->id_pok,
                'nom_pok' => $pok->nom_pok,
                'type1' =>  $pok->type1,
                'type2' => $pok->type2,

            );
           array_push($tabPokedex, $lePok);
        }
*/      $aPokedex = array("pokemons" => json_decode($pokedex));
        return view('pokedex.pokemons',compact('aPokedex'));
        //return response()->json($pokedex);
    }

    public function getPokemonSearch(Request $request){

        $pokedex = DB::table('pokedex')
        ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
        ->where('nom_pok', 'LIKE','%'.$request->input('search').'%')
        ->get();

        $aPokedex = array("pokemons" => json_decode($pokedex));
        return view('pokedex.pokemons',compact('aPokedex'));
    }

    public function getPokemon($id){
        $pokedex = DB::table('pokedex')
        ->select('pokedex.id_pok', 'pokedex.desc_pok','pokedex.nom_pok', 'types.type1','types.type2',
        'weaknesses.bug','weaknesses.dragon','weaknesses.electric','weaknesses.fairy','weaknesses.fight',
        'weaknesses.fire', 'weaknesses.water', 'weaknesses.flying','weaknesses.ghost','weaknesses.grass',
        'weaknesses.ground','weaknesses.ice', 'weaknesses.normal','weaknesses.poison','weaknesses.psychic',
        'weaknesses.rock','weaknesses.steel',
        'stats.hp','stats.attack','stats.defense','stats.sp_attack','stats.sp_defense','stats.speed')
        ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
        ->join('weaknesses', 'weaknesses.pokedex_id', '=', 'pokedex.id_pok')
        ->join('stats', 'stats.pokemon_id', '=', 'pokedex.id_pok')
       //->join('evolutions', 'evolutions.id_pok_evol', '=', 'pokedex.id_pok')
        ->where('pokedex.id_pok', '=', $id)
        ->first();

        $evolutionBase = DB::table('evolutions')
                    ->select('evolutions.id_pok_base', 'evolutions.lvl_evol_pok')
                    ->join('pokedex', 'evolutions.id_pok_base', '=', 'pokedex.id_pok')
                    ->where('evolutions.id_pok_evol', '=', $id)
                    ->first();

        $evolutionSup = DB::table('evolutions')
        ->select('evolutions.id_pok_evol', 'evolutions.lvl_evol_pok')
        ->join('pokedex', 'evolutions.id_pok_evol', '=', 'pokedex.id_pok')
        ->where('evolutions.id_pok_base', '=', $id)
        ->first();

        /*if(!empty($evolutionBase)){$pokedex[] = array('evolutions' => $evolutionBase);}
        if(!empty($evolutionSup)){$pokedex[] = array('evolutions' => $evolutionSup);}*/

        //$pokemon = array("pokemon" => json_decode($pokedex));
        return view('pokedex.pokemonid',compact(["pokedex","evolutionBase","evolutionSup"]));
       // return response()->json($pokedex);
    }

}
