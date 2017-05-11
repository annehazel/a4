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
        
         $peopleForDropdown = Person::peopleForDropdown();
    
       // $biographies = Biography::with('people');
      //  $recentBiographies = $biographies->sortByDesc('updated_at')->take(3);
        
       // $biographies=Biography::with('people')->sortByDesc('updated_at')->take(3);
       
        return view('bios.index')->with([
         //   'biographies' => $biographies,
          //  'recentBiographies' => $recentBiographies,
            'peopleForDropdown' => $peopleForDropdown
            ]);
       
    }
    
    
    /**
   * GET
   * /search
   */
   public function search() {
    
       return view('bios.index');
   }
   
   
   
/**
* GET
* /edit
*/
           
    public function edit($id){
        
        $biography = Biography::find($id);
        
        # Get all the authors
        $people = Person::orderBy('name_last', 'ASC')->get();
        $peopleForDropdown = Person::peopleForDropdown();

        
        if(is_null($biography)){
            
            Session::flash('message', 'Biography not found');
            return redirect('/');
        
        }
        # Redirect user to the edit route with an $id
        return view('bios.edit')->with([
            'id'=> $id,
            'biography'=> $biography,
            'peopleForDropdown' => $peopleForDropdown,
            'language_id'=> $biography->language_id
                
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
        
        
        $people = Person::orderBy('name_last', 'ASC')->get();
        
        $peopleForDropdown = Person::peopleForDropdown();
        
        return view('bios.add')->with([
            'peopleForDropdown' => $peopleForDropdown,
              ]);
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
        $newBiography->person_id = $request->person_id;
        

        $newBiography->save();
                
        
        Session::flash('message', 'Your biography was added');
        
        return redirect('/');
    
     }   
        
     public function view(Request $request){
        
        $personId = $request->person_id;
        
        return redirect('/view/'.$personId);
        
    }   
    
        
    public function viewWithId($id){
        
        $person = Person::with('biographies')->find($id);
             
        return view('bios.view')->with([
            
          'person' => $person,
          //'personWithBios' => $personWithBios
        
        ]);
        
    }
    
}
