<?php

namespace App\Http\Controllers;
use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    
     public function index()
        {
             $Hotel = Hotels::get();
             return view('admin.dis', compact('Hotel'));
            
        }
        
        public function create()
        {
            return view('admin.addhotel');
        }
        public function store(Request $request)
        {
        $data = new Hotels();
        $data->name = $request->name;
        $data->location = $request->location;
        $data->openinghours = $request->openinghours;
        $data->contactinformation = $request->contactinformation;
      
        $data->save();
        
        return redirect('/hotels')->with('success', 'Added Successfully');
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
            Hotels::destroy($id);
            return redirect('/hotels')->with('success', ' deleted successfully');
        }
    
 }

