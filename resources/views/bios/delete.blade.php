@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    
    <h1>Delete Biography</h1>
    
    <h3>Confirm deletion</h3>
    <form method='POST' action='/delete'>

        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $biography->id }}'>

        <p>Are you sure you want to delete the version of {{$biography->person->name_first.' '.
            $biography->person->name_last}}'s biography, submitted on {{$biography->submitted_on}}?</p>

        <input type='submit' value='Yes, delete this version.' class='btn btn-danger'> 

    </form>
        

        
@endsection