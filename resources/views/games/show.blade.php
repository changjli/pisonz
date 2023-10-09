@extends('games.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Games Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Game Name : {{ $games->name }}</h5>
        <p class="card-text"><img src="{{ $games->image }}" width="200px"></p></br>
        <a class="btn btn-primary" href="{{ url('/game') }}"> Back</a>
  </div>
    </hr>
  </div>
</div>

@endsection