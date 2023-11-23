@extends('layouts.master')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Create Product</h3>
        <a class="btn btn-success btn-sm" href="{{ route('index') }}">List Products</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <form action="{{ route('store') }}" method="POST">

        @csrf
        <div class="form-group">
            <label>Name <span style="color:red;">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="product name" required>
        </div>
        <div class="form-group">
            <label>Quantity <span style="color:red;">*</span></label>
            <input type="number" name="quantity" class="form-control" placeholder="product Quantity" required>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price <span style="color:red;">*</span></label>
                            <input type="number" name="price" class="form-control" placeholder="product Price" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
