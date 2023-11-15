@extends('banners.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Banner</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/banners/' .$banners->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$banners->id}}" id="id" />
        <label>Banner Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name', $banners->name) }}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Banner Image URL</label></br>
        <input type="url" name="image" id="image" value="{{ old('image', $banners->image) }}" class="form-control @error('image') is-invalid @enderror">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/admin/banners') }}"> Back</a>
    
  </div>
</div>
  
@endsection