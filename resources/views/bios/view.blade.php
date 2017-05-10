@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <h1>Biographies</h1>
    <h2>Person name</h2>

    <p>Organization: </p>
    
    <p>City, Country:</p>
    
    <h3>Biographies: </h3>
    <p>{{$biography->text}}
        

        
@endsection
    