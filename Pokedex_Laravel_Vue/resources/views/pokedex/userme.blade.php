@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    
    <userme-component iduser="{{$id}}" idicon="" username="{{$user->username}}"></userme-component>       
             
              
 
</div>

@endsection