@extends('layouts.app')
@section('content')
@section('pageTitle','Product Details')
<div class="section-heading">
        <h1 class="page-title">Product Details</h1>
    <a href="{{ url('/productdetails/create') }}" class="btn btn-primary btn-lg" role="button"
       aria-disabled="true">Add</a>
    <a href="{{ url('/products/') }}" class="btn btn-success btn-lg" role="button" aria-disabled="true">Products
        List</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>Description</th>
                        <th>Color</th>
                        <th>Quantity</th>
                        <th>Warranty Status</th>
                        <th>Minimum Quantity</th>
                        <th>Maximum Quantity</th>
                        <th>Discount</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($productdetail as $productdetail)
                        <tr>
                            <td>
                                <a href={{route('productdetails.show',$productdetail->id)}}/>{{$productdetail->model}}
                            </td>
                            <td>{{$productdetail->description}}</td>
                            <td>{{$productdetail->color}}</td>
                            <td>{{$productdetail->qty}}</td>
                            @if($productdetail->warranty_status == 0)
                                <td><p class="btn-danger data">No Warranty</p></td>
                            @else
                                <td><p class="btn-success data">Warranty Applied</p></td>
                            @endif
                            <td>{{$productdetail->min_qty}}</td>
                            <td>{{$productdetail->max_qty}}</td>
                            <td>{{$productdetail->discount}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection