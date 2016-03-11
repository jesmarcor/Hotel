<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoomsController extends Controller
{
  public function index()
  {
    $rooms = Room::all();

    return view('rooms.index', compact('rooms') );
  }

  public function store(Request $request, Room $room)
  {
    $this->validate( $request, [
        'name' => 'required'
      ],[
        'required' => 'no puede estar vacío'],
      ['stars' => 'required'],[
        'required' => 'no puede estar vacío']
        ]);

    $hotel = new Room( $request->all() );

    $hotel->addRoom( $room, 1);

    return back();
  }

  public function edit(Room $room)
  {
      return view('rooms.edit', compact('room') );
  }

  public function update(Request $request, room $room)
  {
    $room->update( $request->all() );

    return redirect('rooms/' . $room->room_id);
  }

  public function delete(Room $room)
  {
    $hotel_id = $room->room_id;

    $room->delete();

    return redirect('rooms/' . $room_id);
  }
}
