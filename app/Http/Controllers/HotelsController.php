<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotel;

class HotelsController extends Controller
{
   public function index()
   {
     $hotels = Hotel::all();

     return view('hotels.index', compact('hotels') );
   }

   public function show(Hotel $hotel)
   {
     return view('hotels.show', compact('hotel') );
   }

   public function store(Request $request, Hotel $hotel)
   {
     $this->validate( $request, [
         'name' => 'required | min:10'
       ],[
         'required' => 'no puede estar vacío',
         'min' => 'el campo debe tener 10 caracteres'],
       ['state' => 'required'],[
         'required' => 'no puede estar vacío'],[
         'beds' => 'required'],[
         'required' => 'el campo no puede estar vacío'
         ]);

     $hotel = new Room( $request->all() );

     $hotel->addRoom( $room, 1);

     return back();
}
