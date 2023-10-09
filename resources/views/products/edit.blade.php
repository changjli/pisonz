@extends('products.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit product</div>
  <div class="card-body">
       
      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Category</label></br>
        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
          <option selected disabled>Select Category</option>
          @foreach ($categories as $item)
            <option value="{{ $item->id }}" {{ old('category_id', $product->category_id) == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
          @endforeach
        </select>
        @error('category_id')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Product Name</label></br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Product Price</label></br>
        <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}">
        @error('price')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Product Quantity</label></br>
        <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $product->quantity) }}">
        @error('quantity')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <label>Product Notes</label></br>
        <input type="text" name="notes" id="notes" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes', $product->notes) }}">
        @error('notes')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form></br>
    <a class="btn btn-primary" href="{{ url('/product') }}"> Back</a>
  </div>
</div>
  
@endsection