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
        $request->validate(
        ['image'=>'image|mimes:png,jpg,jpeg,gif,svg']
         );    
        $data = new Hotels();
        $data->name = $request->name;
        $data->location = $request->location;
        $data->opening= $request->openinghours;
        $data->contactinfo = $request->contactinformation;
        $image_name = time().'.'.$request->image->extension();
        $request->image->move(public_path('hotelsimages'),$image_name);
        $path = "hotelsimages/".$image_name;
        $data->image = $path;
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

