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
                        <th>Name</th>
                        <th>Selling_price</th>
                        <th>Sold</th>
                        <th>Remaining</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($products as $product)
                        <tr>
                            <td><a href={{route('productdetails.index',$product->id)}}/>{{$product->code}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->sold}}</td>
                            <td>{{$product->remaining}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection