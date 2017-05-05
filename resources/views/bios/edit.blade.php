@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <h1>Biographies</h1>
    <h2>Edit: </h2>


    <form method='GET' action='/'>

        <label for='searchTerm'>Search by name:</label>
        <input type='text' name='searchTerm' id='searchTerm' value=''>

        <br>
        <input type='submit' class='btn btn-primary btn-small'>

    </form>
        
        

        
@endsection
    