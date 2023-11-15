@extends('banners.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Banner</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/banners') }}" method="post">
        {!! csrf_field() !!}
        <label>Banner Name</label></br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Banner Image URL</label></br>
        <input type="url" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form></br>
      <a class="btn btn-primary" href="{{ url('/admin/banners') }}"> Back</a>
    
  </div>
</div>
  
@endsection