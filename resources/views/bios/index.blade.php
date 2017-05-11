@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <h1>Biographies</h1>
    <p>Text</p>
        
        


    <h2>Search</h2>

    <form method='GET' action='/'>

        <label for='searchTerm'>xxxx:</label>
        <input type='text' name='searchTerm' id='searchTerm' value=''>

        <br>
        <input type='submit' class='btn btn-primary btn-small'>

    </form>
        
        
        

        
    
    
        
@endsection
    
    



