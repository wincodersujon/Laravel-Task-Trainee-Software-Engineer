@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Show Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('index') }}">List Products</a>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" disabled>
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" disabled>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" disabled>
    </div>
@endsection
