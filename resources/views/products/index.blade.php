@extends('layouts.app')
@section('content')
@section('pageTitle','Products')
    <div class="section-heading">
        <h1 class="page-title">Products List</h1>
        <a href="{{ url('/products/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><a href={{route('productdetails.index',$product->id)}}/>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->type->name}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection