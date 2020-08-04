@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    
     <userme-component iduser="{{$user->id}}" idicon="{{$user->icon_id}}" username=" {{$user->username}}"></userme-component>

     @foreach($team as $t)
        <pokemon-component idpok="{{$t->pok_id}}" nompok="{{$t->nom_pok}}" type1="{{$t->type1}}" type2="{{$t->type2}}"></pokemon-component> 
    @endforeach         
 
</div>

@endsection