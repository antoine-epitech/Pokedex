@extends('layouts.app')

     @section('content')
     <div class="container mx-auto">
         
          <userid-component iduser="{{$user->id}}" idicon="{{$user->icon_id}}" username=" {{$user->username}}"></userid-component>
     
          <div class="flex flex-wrap mb-4">
             <div class="w-full text-center text-white font-bold lg:text-2xl bg-red-700 h-12">TEAM</div>
           </div>
     
          @foreach($team as $t)
             <pokemon-component idpok="{{$t->pok_id}}" nompok="{{$t->nom_pok}}" type1="{{$t->type1}}" type2="{{$t->type2}}"></pokemon-component> 
         @endforeach         
      
     </div>
     
     @endsection
        <pokemon-component idpok="{{$t->pok_id}}" nompok="{{$t->nom_pok}}" type1="{{$t->type1}}" type2="{{$t->type2}}"></pokemon-component> 
    @endforeach         
 
</div>

@endsection