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
   */
   public function search() {
    
       return view('bios.search');
   }
   
   
   
/**
* GET
* /edit
*/
           
    public function edit($id){
        
        $biography = Biography::find($id);
        
        # Get all the authors
        $people = Person::orderBy('name_last', 'ASC')->get();
        
        $peopleForDropdown = [];
        
        foreach($people as $person) {
            
            $peopleForDropdown[$person->id] = $person->name_last.', '.$person->name_first;
        }
        
        if(is_null($biography)){
            
            Session::flash('message', 'Biography not found');
            return redirect('/');
        
        }
        # Redirect user to the edit route with an $id
        return view('bios.edit')->with([
            'id'=> $id,
            'biography'=> $biography,
            'peopleForDropdown' => $peopleForDropdown
                
              ]);
    
    
        
    }
    
    
    
    /**
    * POST
    * /edit
    */       
    public function saveEdits(Request $request){
        
        $this->validate($request, [
            'language' => 'required',
            'biography' => 'required',
            'submitted_on' => 'required',
        ]);
        
        
        $biography = Biography::find($request->id);
        
        $biography->language_id = $request->language;
        $biography->submitted_on = $request->submitted_on;
        $biography->text = $request->biography;
        $biography->person_id = $request->person_id;
        

        $biography->save();
        
        Session::flash('message', 'The biography was saved successfully.');
                
        return view('bios.view')->with([
            'biography'=> $biography,
              ]);
    
        
    }

    /**
     *GET
     * /new
    * Add new biography
    * 
    */  
        
    public function add(Request $request) {
        
        return view('bios.add');
    }
           
        
    /**
    * POST
    * /new
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
