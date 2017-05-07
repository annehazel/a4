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
               
            
               
               
            @endforeach
        
        
    @endif
        
        
        
        
    @if($searchTerm != null)
        <h2>Results for query: <em>{{ $searchTerm }}</em></h2>
    
        @if(count($searchResults) == 0)
            No matches found.
        @else
            <div class='book'>
                @foreach($searchResults as $title => $book)
    
                    <h3>{{ $title }}</h3>
                    <h4>by {{ $book['author'] }}</h4>
                    <img src='{{$book['cover']}}'>
    
                @endforeach
            </div>
        @endif
    @endif
    
    
    
    
        
@endsection
    
    



