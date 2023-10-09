@extends('games.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Game</div>
  <div class="card-body">
       
      <form action="{{ url('game/' .$games->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$games->id}}" id="id" />
        <label>Game Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name', $games->name) }}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Game Image URL</label></br>
        <input type="url" name="image" id="image" value="{{ old('image', $games->image) }}" class="form-control @error('image') is-invalid @enderror">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/game') }}"> Back</a>
    
  </div>
</div>
  
@endsection