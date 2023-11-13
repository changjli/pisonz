@extends('products.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Products Page</div>
  <div class="card-body">
    <h5 class="card-title">Product Name : {{ $products->name }}</h5>
    <p class="card-text">Category Name : {{ $products->category->name }}</p>
    <p class="card-text">Product Price : Rp {{ $products->price }}</p>
    <p class="card-text">Product Quantity : {{ $products->quantity }}</p>
    <p class="card-text">Product Notes : {{ $products->notes }}</p></br>
    <a class="btn btn-primary" href="{{ url('/admin/products') }}"> Back</a>
    </hr>
  </div>
</div>

@endsection