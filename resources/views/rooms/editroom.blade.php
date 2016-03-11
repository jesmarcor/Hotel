@extends('layout')

@section('titulo')
  Editar opinion {{ $room->id }}
@endsection

@section('contenido')
  <h1>Edit Room</h1>

  <form method="POST" action="/room/{{ $room->id }}">
    {{ method_field('PATCH') }}
    <div class="form-group">
      <textarea name="status" class="form-control">{{ $room->status }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Room</button>
    </div>
  </form>
@endsection
