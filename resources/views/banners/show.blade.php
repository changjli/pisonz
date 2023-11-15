@extends('banners.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Banners Page</div>
  <div class="card-body">
    <h5 class="card-title">Banner Name : {{ $banners->name }}</h5>
    <p class="card-text"><img src="{{ $banners->image }}" width="200px"></p></br>
    <a class="btn btn-primary" href="{{ url('/admin/banners') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection