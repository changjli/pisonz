@extends('promos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Promos Page</div>
  <div class="card-body">
    <h5 class="card-title">Promo Code : {{ $promos->promo_code }}</h5>
    <p class="card-text">Discount : {{ $promos->discount }}%</p>
    <p class="card-text">Start Date : {{ $promos->startDate }}</p>
    <p class="card-text">End Date : {{ $promos->endDate }}</p></br>
    <a class="btn btn-primary" href="{{ url('/admin/promos') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection