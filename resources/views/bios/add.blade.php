@extends('layouts.master')


@section('title')
    Biographies
@endsection



@section('content')
    <h2>Add a biography</h2>


    <form method='POST' action='/add'>
    
        {{ csrf_field() }}
        
        <label for='person_id'>* Biography for:</label>
        <select id='person_id' name='person_id'>
            @foreach($peopleForDropdown as $person_id => $personName)
                 <option value='{{ $person_id }}'>
                     {{$personName}}
                 </option>
             @endforeach
        </select>
        <p>* Select the lagnuage of the biography:<br>
        <input type="radio" name="language" value="1"> English
        <input type="radio" name="language" value="2"> Spanish
        <input type="radio" name="language" value="3"> Portuguese
        <br>
        <label for="submitted_on">Submitted on:</label>
        <input type="date" name="submitted_on" id="submitted_on"><br>
        <label for='biography'>* Biography:</label><br>
        <textarea rows="4" cols="50" name='biography' id='biography'
        value='{{ old('biography')}}'> </textarea>


        <br>
        <input type='submit' class='btn btn-primary btn-small'>

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