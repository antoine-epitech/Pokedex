@extends('layouts.app')

@section('content')


<div class="container mx-auto">
  
    <div class="w-full">

    {!! Form::open(['method'=>'GET','url'=>'/pokemons/search','class'=>'navbar-form navbar-left', 'id'=>'search','name'=>'search','role'=>'search'])  !!}

        <div class="flex items-center border-b bg-white border-red-700 py-2">
            <input id="search"
            name="search"
            placeholder="Search..."
            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
            type="text"
            placeholder="Jane Doe"
            aria-label="Full name">
        </div>

    {!! Form::close() !!}

    </div>

    @foreach ($aPokedex as $pok)
        @foreach($pok as $p)

         <pokemon-component
            idpok="{{$p->id_pok}}"
            nompok="{{$p->nom_pok}}"
            type1="{{$p->type1}}"
            type2="{{$p->type2}}">
          </pokemon-component>

        @endforeach
    @endforeach

</div>




@endsection
