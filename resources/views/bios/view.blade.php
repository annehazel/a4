@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    
    <h1>View/Edit Biography</h1>
    
    <h3>Biography for: {{$person->name_first.' '.$person->name_last}}</h3>
    
    <p>Organization: {{$person->org, }}</p>
    
    <p>City, Country: {{$person->city.' '.$person->country}}</p>
    
    <h3>Biographies: </h3>
        
        @foreach($person->biographies as $biography)
            
            <a href='/edit/{{ $biography->id }}'>Edit Biography</a>     
            <p>{{$biography['text']}}</p>     
                 
        @endforeach
        
    <p></p>
        

        
@endsection
    