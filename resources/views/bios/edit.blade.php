@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    <a href="/">Return Home</a>
    <h2>Edit a Biography</h2>

    <p>(* Indicates a required field)</p>
    
    <form method='POST' action='/edit'>
    
        {{ csrf_field() }}
        
        <input type='hidden' name='id' value='{{$biography->id}}'>
        
        
        <label for='person_id'>* Biography for:</label>
        <select id='person_id' name='person_id'>
            @foreach($peopleForDropdown as $person_id => $personName)
                 <option value='{{old('person_id', $person_id) }}' {{ ($biography->person_id == $person_id) ? 'SELECTED' : '' }}>
                     {{$personName}}
                 </option>
             @endforeach
        </select>
        <p>* Biography language:<br>
        <input type="radio" name="language_id" value="1" {{$biography->language_id=="1" ? 'CHECKED' : null }}> English
        <input type="radio" name="language_id" value="2" {{$biography->language_id=="2" ? 'CHECKED' : null }}> Spanish
        <input type="radio" name="language_id" value="3" {{$biography->language_id=="3" ? 'CHECKED' : null }}> Portuguese
        <br>
        <label for="submitted_on">* Submitted on:</label>
        <input type="date" name="submitted_on" id="submitted_on" value='{{ old('submitted_on', $biography->submitted_on)}}'><br>
        <label for='biography'>* Biography:</label><br>
        <textarea rows="4" cols="50" name='biography' id='biography'
        >{{ old('biography', $biography->text)}}</textarea>


        <br>
        <input type='submit' value='Save Changes' class='btn btn-primary btn-small'>

    </form>
        
     
    @if(count($errors) > 0)
        <div class='alert alert-danger error'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif   
        

        
@endsection