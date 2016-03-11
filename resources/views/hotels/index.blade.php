
@extends ('layout')

@section('title')
  Hotels
@endsection

@section('content')
  <h1>Hotels</h1>

    @foreach($hotels as $hotel)
      <div>
        <a href="/hotels/{{ $hotel->id }}">{{ $hotel->name }}</a>
        
      </div>
    @endforeach
@endsection
