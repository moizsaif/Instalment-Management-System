@extends('layouts.app')
@section('content')
@section('pageTitle','Products')
    <div class="section-heading">
        <h1 class="page-title">Products List</h1>
        <a href="{{ url('/products/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
        <a href="{{ url('/productdetails/') }}" class="btn btn-default-dark btn-lg" role="button"
           aria-disabled="true">Product Details</a>
        <a href="{{ url('/productCategories/') }}" class="btn btn-warning btn-lg" role="button"
           aria-disabled="true">Product Categories</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Batches in Stock</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><a href={{route('products.show',$product->id)}}/>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->type->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->detail->count()}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection