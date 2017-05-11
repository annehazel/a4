@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    
    
<div>  <!-- main div -->   
    <h1>Faculty and Staff Biographies</h1>
    <p>Select a faculty memeber or staff member below to add a new version of their biogrpahy or view/edit an
    existing version.</p>
        
    <div> <!-- add new biography div --> 
    
        <form method='GET' action='/add'>
            {{ csrf_field() }}
            <br>
            <input type='submit' value='Add Biography' class='btn btn-primary btn-small'>
        </form>
            
    </div>

    <div>
        <form method='GET' action='/view/'>
            {{ csrf_field() }}
            
            <label for='person_id'>* View/Edit biography for:</label>
            <select id='person_id' name='person_id'>
                @foreach($peopleForDropdown as $person_id => $personName)
                     <option value='{{old('person_id', $person_id) }}'>
                         {{$personName}}
                     </option>
                 @endforeach
            </select>
            <br>
            <input type='submit' value='View/Edit' class='btn btn-primary btn-small'>
        </form>

    </div>
        
     @foreach($recentBiographies as $biography)
            
            <p>{{$biography->text}}</p>
            
    @endforeach   
    
        


        
    


  
        
        
        

        
</div> <!-- end main div -->    
    
        
@endsection
    
    



