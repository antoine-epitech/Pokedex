@extends('layouts.app')

@section('content')

<div class="container mx-auto">
    <!-- ... -->

    <div class="grid grid-rows-3 grid-flow-col gap-4 flex flex-wrap">
      <div class="row-span-3 p-16 bg-white bg-opacity-50 w-full">

          <img width="100" height="100" class="mx-auto" src="/img/icons/{{Auth::user()->icon_id}}.png" />
          <h1 class="mx-auto header-username text-center text-black opacity-10 text-4xl w-2/4">{{Auth::user()->username}}</h1>
          <p class="mx-auto text-gray-700 text-opacity-50 text-center w-1/4">ID # {{Auth::user()->id}} </p>


      </div>
      <div class="row-span-1 col-span-2 bg-yellow-500 bg-opacity-0 w-full">
        <div class="bg-indigo-900 text-center py-4 lg:px-4">
          <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">Everyday revieve one pokemon !</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
          </div>
        </div>
        @if(session('success'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">INFORMATIONS</p>
            <p>{{session('success')}}</p>
          </div>
        @endif</div>
      <div class="row-span-2 col-span-2 bg-white bg-opacity-50 rounded w-full">
        <h1 class="mx-auto header-username text-center text-black opacity-10 text-4xl w-2/4">EDIT </h1>
          <form method="post" action="{{ route('updateme') }}" class=" rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
              <input id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus  type="text" placeholder="  {{Auth::user()->username}}">
            </div>
            <div class="mb-6">
              <div class="inline-block relative w-64">
                <select id ="icon-id" name="icon_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                  <option id="1" value="1" >Pokeball</option>
                  <option id="2" value="2">Pikachu</option>
                  <option id="3" value="3">Charmander</option>
                  <option id="4" value="4">Bulbasaur</option>
                  <option id="5" value="5">Squirtle</option>
                  <option id="6" value="6">Jigglypuff</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
            </div>
            <div class="">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button"   onClick="javascript:window.location.href='/pokemons'" >
              SAVE
            </button>
            </div>
          </form>


      </div>
    </div>



    <div class="flex justify-center">




      </div>

    <!-- Full width column -->


  </div>

@endsection
