@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    
    
    
    <userme-component iduser="{{$userme->id}}" idicon="{{$userme->icon_id}}" username="{{$userme->username}}"></userme-component>       
    <div class="w-full">
        <form class="bg-yellow-500 bg-opacity-75 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('trade',$userid->id )}}">
            @csrf
            <div class="mb-4 mx-auto">
            <label class="block text-red-700 text-sm font-bold mb-2" for="pok_id">
                Your pokemons
            </label>
            <div class="inline-block relative w-64">
                <select id="pok_id" name="pok_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($teamme as $t)
                    <option id="{{$t->pok_id}}" value="{{$t->pok_id}}">{{$t->nom_pok}}</option>
                    @endforeach
                    
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>


              <button class=" shadow bg-red-700 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
               SEND
              </button>
              <a href="/users"><button class=" shadow bg-white text-red-700 hover:bg-red-700 hover:text-white focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                CANCEL
               </button></a>

              @if(session('success'))
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                        <p class="font-bold">INFORMATIONS</p>
                        <p>{{session('success')}}</p>
                    </div>
                
                @endif
            </div>

        </form>

        </div>
    <userme-component iduser="{{$userid->id}}" idicon="{{$userid->icon_id}}" username=" {{$userid->username}}"></userme-component>
</div>

@endsection