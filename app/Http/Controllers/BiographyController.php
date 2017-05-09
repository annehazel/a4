<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biography;
use App\Person;
use App\Language;
use Session;

class BiographyController extends Controller
{
    
/**
* GET
* / 
*/
    
    public function index(){
        
        
        return view('bios.search');
        
    }
    
    
/**
* GET
* /search
*
* IN PROGRESS / TRIAL
* 
*/
   public function search(Request $request) {
    
        $people = Person::with('biographies')->get();
        
    
        $recentBios = [];
        
        
        foreach($people as $person => $recentBio) {
            
            $firstName = $people[$person]['name_first'];
            $lastName = $people[$person]['name_last'];
                       
        }
    
   }
      
   
   
/**
* GET
* /edit
*/
           
    public function update(){
        
        $biography = Biography::where('person_id', 'LIKE','1');
        
        
        return view('bios.edit');
        
    }

/**
* Add new biography
* 
*/  
        
    public function add(Request $request) {
        
        return view('bios.add');
    }
           
        
/**
* Store new biography
* 
*/    
    
    public function storeBiography(Request $request){
        
        
     // Validate incoming form data
        
    $this->validate($request, [
        'language' => 'required',
        'biography' => 'required',
        'submitted_on' => 'required',
    ]);
            
    
        
        $newBiography = new Biography();
        
        $newBiography->language_id = $request->language;
        $newBiography->submitted_on = $request->submitted_on;
        $newBiography->text = $request->biography;
        $newBiography->person_id = 1;
        

        $newBiography->save();
                
        
        Session::flash('message', 'Your biography was added');
        
        return redirect('/');
    
     }   
        
    
    
        
    public function view(){
        
        
        $newBiography = new Biography();
        
        return view('bios.view');
        
    }
    
}
