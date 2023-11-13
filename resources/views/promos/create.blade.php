@extends('promos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Promo</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/promos') }}" method="post">
        {!! csrf_field() !!}
        <label>Promo Code</label></br>
        <input type="text" name="promo_code" id="promo_code" class="form-control @error('promo_code') is-invalid @enderror" value="{{ old('promo_code') }}">
        @error('promo_code')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Discount</label></br>
        <input type="text" name="discount" id="discount" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount') }}">
        @error('discount')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Start Date</label></br>
        <input type="text" name="startDate" id="startDate" class="form-control @error('startDate') is-invalid @enderror" value="{{ old('startDate') }}">
        @error('startDate')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>End Date</label></br>
        <input type="text" name="endDate" id="endDate" class="form-control @error('endDate') is-invalid @enderror" value="{{ old('endDate') }}">
        @error('endDate')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/admin/promos') }}"> Back</a>
  </div>
</div>
  
@endsection