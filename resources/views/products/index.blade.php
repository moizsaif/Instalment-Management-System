@extends('layouts.app')
@section('content')
@section('pageTitle','Products')
    <div class="section-heading">
        <h1 class="page-title">Product List</h1>
        <a href="{{ url('/products/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Discount</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Warranty Status</th>
                        <th>Warranty</th>
                        <th>Minimum Quantity</th>
                        <th>Maximum Quantity</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($products as $product)
                        <tr>
                            <td><a href={{route('productdetails.create',$product->id)}}/>{{$product->code}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->model}}</td>
                            <td>{{$product->color}}</td>
                            <td>{{$product->warranty_status}}</td>
                            <td>{{$product->warranty}}</td>
                            <td>{{$product->min_qty}}</td>
                            <td>{{$product->max_qty}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection