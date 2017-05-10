@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <h1>Biographies</h1>
    <h2>Edit a Biography</h2>


    <form method='POST' action='/edit'>
    
        {{ csrf_field() }}
        
        <p>* Change associated person:</p>
        <p>* Biography language:<br>
        <input type="radio" name="language" value="1"> English
        <input type="radio" name="language" value="2"> Spanish
        <input type="radio" name="language" value="3"> Portuguese
        <br>
        <label for="submitted_on">Submitted on:</label>
        <input type="date" name="submitted_on" id="submitted_on" value='{{ old('submitted_on', $biography->submitted_on)}}'><br>
        <label for='biography'>* Biography:</label><br>
        <textarea rows="4" cols="50" name='biography' id='biography'
        >{{ old('biography', $biography->text)}}</textarea>


        <br>
        <input type='submit' value='Save Changes' class='btn btn-primary btn-small'>

    </form>
        
        
        

        
@endsection