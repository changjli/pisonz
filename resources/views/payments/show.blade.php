@extends('payments.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Payments Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Payment Method : {{ $payments->method }}</h5>
        <p class="card-text">Account Number : {{ $payments->account_number }}</p>
        <p class="card-text">Account Name : {{ $payments->account_name }}</p></br>
        <a class="btn btn-primary" href="{{ url('/payment') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection