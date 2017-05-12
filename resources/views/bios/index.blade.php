@extends('layouts.master')


@section('title')
    Biographies
@endsection


@section('content')
    
    
<div>  <!-- main div -->   
    <p>In order to keep track of the versions of biographies received by the Institute for its Faculy and Staff,
    new biogrpahies received should be entered into the system</p>
    <p>Select a faculty memeber or staff member below to add a new version of their biogrpahy or view/edit an
    existing version.</p>
        
    <div class="input-block"> <!-- add new biography div --> 
    
        <form method='GET' action='/add'>
         
           <br>
            <input type='submit' value='Add Biography' class='btn btn-primary btn-small'>
        </form>
            
    </div>

    <div class="input-block">
        <form method='GET' action='/view/'>
            
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
    
    <h2>Recently Updated Biographies:</h2>
        
     @foreach($recentBiographies as $biography)
            
            <div class="biography" >
                <h4>{{$biography->person->name_first}} {{$biography->person->name_last}}</h4>
                <p>Updated on: {{$biography->updated_at}}</p>
                <p>{{$biography->text}}</p>
            </div>
    @endforeach   
    
        


        
    


  
        
        
        

        
</div> <!-- end main div -->    
    
        
@endsection
    
    



