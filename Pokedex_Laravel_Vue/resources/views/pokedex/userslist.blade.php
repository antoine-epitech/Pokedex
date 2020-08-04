@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="w-full">
        {!! Form::open(['method'=>'GET','url'=>'/users/search','class'=>'navbar-form navbar-left', 'id'=>'search','name'=>'search','role'=>'search'])  !!}
    
        <div class="flex items-center border-b bg-white border-red-700 py-2">
            <input id="search" name="search" placeholder="Search..." class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name">
        </div>
    {!! Form::close() !!}
    </div>
    
            @foreach ($users as $user)
                <users-component iduser="{{$user->id}}" idicon="{{$user->icon_id}}" username=" {{$user->username}}"></users-component>
              
            @endforeach
</div>

@endsection