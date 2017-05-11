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
         $recentBiographies = Biography::with('language')->with('person')->orderByDesc('updated_at')->take(3)->get();
       
        return view('bios.index')->with([
            'peopleForDropdown' => $peopleForDropdown,
            'recentBiographies' => $recentBiographies
        ]);
       
    }
   
   
/**
* GET
* /edit
*/
           
    public function edit($id){
        
        $biography = Biography::find($id);
        
        # Get all the people
        $people = Person::orderBy('name_last', 'ASC')->get();
        $peopleForDropdown = Person::peopleForDropdown();
        $biography->text  = preg_replace('/\s+/', ' ', trim($biography->text ));
        
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
            'language_id' => 'required',
            'biography' => 'required',
            'submitted_on' => 'required',
        ]);
        
        
        $biography = Biography::find($request->id);
        
        $biography->language_id = $request->language_id;
        $biography->submitted_on = $request->submitted_on;
        $biography->text = $request->biography;
        $biography->person_id = $request->person_id;
        
        # create person_id varibale to redirect to person view
        $person_id = $biography->person_id;
        
        $biography->save();
        
        Session::flash('message', 'The biography was saved successfully.');
                
        return redirect('/view/'.$person_id);
    
        
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
        
        ]);
        
    }
    
    
    /**
    * GET
    * Confirm delete request
    */
    public function confirmDeletion($id) {

         $biography = Biography::with('person')->find($id);
         
        if(!$biography) {
            Session::flash('message', 'Biography not found.');
            return redirect('/');
        }

        return view('bios.delete')->with([
            
            'biography' => $biography
                                          
            ]);
    }
    
    /**
    * POST
    * Actually delete the book
    */
    public function delete(Request $request) {
        # Get the book to be deleted
        $biography = Biography::find($request->id);
        if(!$biography) {
            Session::flash('message', 'Deletion failed; could not find the biogrpahy requested');
            return redirect('/');
        }
        
        $person_id = $biography->person_id;

        $biography->delete();
        
        # send the user back to the index page with a flash message confiming deletion
        Session::flash('message', 'The biogrpahy was deleted');
        return redirect('/view/'.$person_id);
    }


    
}
