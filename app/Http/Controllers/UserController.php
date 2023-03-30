<?php

namespace App\Http\Controllers;
use App\Models\Hotels;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
     public function index()
        {
             $Hotel = Hotels::get();
             return view('Userdis', compact('Hotel'));
            
        }
        
        public function create()
        {
            
        }
        public function store(Request $request)
        {
       
       
       
        }
    
      
        public function show($id)
        {
            //
        }
       
        public function update()
        {
            
        }
    
        public function destroy($id)
        {
            
        }
    
 }

