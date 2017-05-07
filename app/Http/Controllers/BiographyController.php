<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biography;
use App\Person;
use App\Language;

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
        

   
       dump($people);

   
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
           
    public function update(){
        return view('bios.edit');
        
    }
    
    
    public function create(){
        
        return view('bios.add');
        
    }
    
        
    public function view(){
        
        return view('bios.view');
        
    }
    
}
