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
        
        
        $people = Person::all();
        dump($people->toArray());
        
        return view('bios.search');
        
    }
    
    
    /**
   * GET
   * /search
   */
   public function search(Request $request) {
    
        $people = Person::with('biographies')->get();
        
    
        $recentBios = [];
        
        
        foreach($people as $person => $recentBio) {
            
            $firstName = $people[$person]['name_first'];
            $lastName = $people[$person]['name_last'];
           
            
        }
   
 
   
       # Start with an empty array of search results; books that
       # match our search query will get added to this array
       $searchResults = [];
   
       # Store the searchTerm in a variable for easy access
       # The second parameter (null) is what the variable
       # will be set to *if* searchTerm is not in the request.
       $searchTerm = $request->input('searchTerm', null);
   
       # Only try and search *if* there's a searchTerm
       if($searchTerm) {
   
            $people = Person::all();
            dump($people->toArray());
   
           # Loop through all the book data, looking for matches
           # This code was taken from v1 of foobooks we built earlier in the semester
           foreach($books as $title => $book) {
   
               # Case sensitive boolean check for a match
               if($request->has('caseSensitive')) {
                   $match = $title == $searchTerm;
               }
               # Case insensitive boolean check for a match
               else {
                   $match = strtolower($title) == strtolower($searchTerm);
               }
   
               # If it was a match, add it to our results
               if($match) {
                   $searchResults[$title] = $book;
               }
   
           }
       }
   
       # Return the view, with the searchTerm *and* searchResults (if any)
       return view('bios.search')->with([
           'people' => $people,
           'searchTerm' => $searchTerm,
           'caseSensitive' => $request->has('caseSensitive'),
           'searchResults' => $searchResults
       ]);
   }
   
   
   
/**
* GET
* /edit
*/
           
    public function edit($id){
        
        $biography = Biography::find($id);
        
        if(is_null($biography)){
            
            Session::flash('message', 'Biography not found');
            return redirect('/');
        
        }
        # Redirect user to the edit route with an $id
        return view('bios.edit')->with([
            'id'=> $id,
            'biography'=> $biography,
                
              ]);
    
    
        
    }
    
    
    
/**
* POST
* /edit
*/
           
    public function savedEdits(){
        
        $biography = Biography::where('person_id', 'LIKE','1');
        
        
        return view('bios.edit');
        
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
