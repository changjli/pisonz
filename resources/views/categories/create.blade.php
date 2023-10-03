@extends('categories.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Category</div>
  <div class="card-body">
      
      <form action="{{ url('category') }}" method="post">
        {!! csrf_field() !!}
        <label>Game</label></br>
        <select name="game_id" id="game_id" class="form-control @error('game_id') is-invalid @enderror">
          <option selected disabled>Select Game</option>
          @foreach ($games as $item)
            <option value="{{ $item->id }}" {{ old('game_id') == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
          @endforeach
        </select>
        @error('game_id')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Category Name</label></br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/category') }}"> Back</a>
  </div>
</div>
  
@endsection