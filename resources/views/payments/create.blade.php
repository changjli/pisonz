@extends('payments.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Payment</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Payment Method</label></br>
        <input type="text" name="method" id="method" class="form-control @error('method') is-invalid @enderror" value="{{ old('method') }}">
        @error('method')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Account Number</label></br>
        <input type="text" name="account_number" id="account_number" class="form-control @error('account_number') is-invalid @enderror" value="{{ old('account_number') }}">
        @error('account_number')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Account Name</label></br>
        <input type="text" name="account_name" id="account_name" class="form-control @error('account_name') is-invalid @enderror" value="{{ old('account_name') }}">
        @error('account_name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form></br>
      <a class="btn btn-primary" href="{{ url('/admin/payments') }}"> Back</a>
    
  </div>
</div>
  
@endsection