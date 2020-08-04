@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    
           
    <userid-component iduser="{{$user->id}}" idicon="{{$user->icon_id}}" username=" {{$user->username}}"></userid-component>
                
 
</div>

@endsection