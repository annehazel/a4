@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <a href="/">Return Home</a>
    <h1>View/Edit a Biography</h1>
    
    <h3>Biography for: {{$person->name_first.' '.$person->name_last}}</h3>
    
    <p>Organization: {{$person->org}}</p>
    
    <p>City, Country: {{$person->city.' '.$person->country}}</p>
    
    <form method='GET' action='/add'>
        
        <br>
        <input type='submit' value='Add New Biography' class='btn btn-primary btn-small'>
    </form>
            
    <h3>Biographies: </h3>

        @if(count($person->biographies) == 0)
            <p>Currently there are no biographies for this person.</p>
        @else
            @foreach($person->biographies as $biography)
                
                <p>Submitted on: {{$biography->submitted_on}}</p>
                <a class="edit-delete-link" href='/edit/{{ $biography->id }}'>Edit this version</a>
                <a href='/delete/{{ $biography->id }}'>Delete this version</a>
                <p>{{$biography['text']}}</p>     
                     
            @endforeach
        @endif
    <p></p>
        

        
@endsection
    