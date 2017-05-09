@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <h1>Biographies</h1>
    <p>Text</p>
        
        


    <h2>Search</h2>

    <form method='GET' action='/'>

        <label for='searchTerm'>Search by name:</label>
        <input type='text' name='searchTerm' id='searchTerm' value=''>

        <br>
        <input type='submit' class='btn btn-primary btn-small'>

    </form>
        
        
        
     @if($people)
         <h3>People</h3>
            @foreach($people as $person )
                <p>{{$person['name_first']}} {{$person['name_last']}}</p>
                    
                @foreach($person->biographies as $biography)
                    
                    <p>{{$biography->text}}</p>
                @endforeach
    
            @endforeach
        
        
    @endif 
        
        
    
    
        
@endsection
    
    



