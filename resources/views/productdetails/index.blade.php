@extends('layouts.app')
@section('content')
@section('pageTitle','ProductDetails')
<div class="section-heading">
        <h1 class="page-title">Product Details</h1>
        <a href="{{ url('/productdetails/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add details to product</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>pr_id</th>
                        <th>grn_id</th>
                        <th>v_id</th>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Quantity</th>
                        <th>Warranty</th>
                        <th>Warranty_status</th>
                        <th>Minimum Quantity</th>
                        <th>Maximum Quantity</th>
                        <th>Purchase Price</th>
                        <th>Selling Price</th>
                        <th>Discount</th>
                        <th>Discounted Price</th>

                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($productdetail as $productdetail)
                        <tr>
                            <td><a href={{route('productdetails.show',$productdetail->id)}}/>{{$productdetail->product_id}}</td>
                            <td>{{$productdetail->grn_id}}</td>
                            <td>{{$productdetail->v_id}}</td>
                            <td>{{$productdetail->code}}</td>
                            <td>{{$productdetail->description}}</td>
                            <td>{{$productdetail->model}}</td>
                            <td>{{$productdetail->color}}</td>
                            <td>{{$productdetail->qty}}</td>
                            <td>{{$productdetail->warranty}}</td>
                            <td>{{$productdetail->warranty_status}}</td>
                            <td>{{$productdetail->min_qty}}</td>
                            <td>{{$productdetail->max_qty}}</td>
                            <td>{{$productdetail->purchase_price}}</td>
                            <td>{{$productdetail->selling_price}}</td>
                            <td>{{$productdetail->discount}}</td>
                            <td>{{$productdetail->discounted_price}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection