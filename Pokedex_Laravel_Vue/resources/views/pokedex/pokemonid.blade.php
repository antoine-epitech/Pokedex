@extends('layouts.app')

@section('content')
<div class="container mx-auto">



<pokemonid-component
      evolbase="{{$evolutionBase->id_pok_base ?? ''}}"
      evolSup="{{$evolutionSup->id_pok_evol ?? ''}}"
      lvlsup="{{$evolutionSup->lvl_evol_pok ?? ''}}"
      bug="{{$pokedex->bug}}"
      dragon="{{$pokedex->dragon}}"
      electric="{{$pokedex->electric}}"
      fairy="{{$pokedex->fairy}}"
      fight="{{$pokedex->fight}}"
      fire="{{$pokedex->fire}}"
      flying="{{$pokedex->flying}}"
      ghost="{{$pokedex->ghost}}"
      grass="{{$pokedex->grass}}"
      ground="{{$pokedex->ground}}"
      ice="{{$pokedex->ice}}"
      normal="{{$pokedex->normal}}" 
      poison="{{$pokedex->poison}}"
      psychic="{{$pokedex->psychic}}"
      rock="{{$pokedex->rock}}"
      steel="{{$pokedex->steel}}"
      water="{{$pokedex->water}}"
      idpok="{{$pokedex->id_pok}}"
      descpok="{{$pokedex->desc_pok}}"
      nompok=" {{$pokedex->nom_pok}}"
      type1="{{$pokedex->type1}}"
      type2="{{$pokedex->type2}}"
      hp="{{$pokedex->hp}}"
      attack="{{$pokedex->attack}}"
      defense="{{$pokedex->defense}}"
      sp_attack="{{$pokedex->sp_attack}}"
      sp_defense="{{$pokedex->sp_defense}}"
      speed="{{$pokedex->speed}}" >
</pokemonid-component>


</div>




@endsection
