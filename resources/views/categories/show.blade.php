@extends('categories.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Category Name : {{ $categories->name }}</h5>
        <p class="card-text">Game Name : {{ $categories->game->name }}</p></br>
        <a class="btn btn-primary" href="{{ url('/category') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection