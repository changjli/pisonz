@extends('payments.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Payment</div>
  <div class="card-body">
       
      <form action="{{ url('payment/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        <label>Payment Method</label></br>
        <input type="text" name="method" id="method" value="{{ old('method', $payments->method) }}" class="form-control @error('method') is-invalid @enderror">
        @error('method')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Account Number</label></br>
        <input type="text" name="account_number" id="account_number" value="{{ old('account_number', $payments->account_number) }}" class="form-control @error('account_number') is-invalid @enderror">
        @error('account_number')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
       <br>
        <label>Account Name</label></br>
        <input type="text" name="account_name" id="account_name" value="{{ old('account_name', $payments->account_name) }}" class="form-control @error('account_name') is-invalid @enderror">
        @error('account_name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/payment') }}"> Back</a>
    
  </div>
</div>
  
@endsection