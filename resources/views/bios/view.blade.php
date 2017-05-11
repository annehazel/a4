@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <h1>Biography for: {{$person->name_first}}</h1>
    
    <h2>Person name</h2>
    <p>Organization: </p>
    
    <p>City, Country:</p>
    
    <h3>Biographies: </h3>
        
        @foreach($person->biographies as $biography)
                 
            <p>{{$biography['text']}}</p>     
                 
        @endforeach
        
    <p></p>
        

        
@endsection
    