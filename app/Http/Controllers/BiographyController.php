<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiographyController extends Controller
{
    
    /**
     * GET
     * / 
     */
    
    public function index(){
        
        
        return view('bios.list');
        
    }
    
    
    
}
