@extends('promos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Promo</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/promos/' .$promos->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Promo Code</label></br>
        <input type="text" name="promo_code" id="promo_code" class="form-control @error('promo_code') is-invalid @enderror" value="{{ old('promo_code', $promos->promo_code) }}">
        @error('promo_code')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Discount</label></br>
        <input type="text" name="discount" id="discount" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount', $promos->discount) }}">
        @error('discount')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Quantity</label></br>
        <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $promos->quantity) }}">
        @error('quantity')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/admin/promos') }}"> Back</a>
  </div>
</div>
  
@endsection