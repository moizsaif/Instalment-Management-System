@extends('layouts.app')
@section('pageTitle','Product Details')
@section('content')
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
                        <th>Product</th>
                        <th>Batch Quantity</th>
                        <th>Sold</th>
                        <th>Purchasing</th>
                        <th>Warranty</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productdetail as $detail)
                        <tr>
                            <td>{{$detail->product->name}}</td>
                            <td>{{$detail->qty}}</td>
                            <td>{{$detail->sold_qty}}</td>
                            <td>{{$detail->purchase_price}}</td>
                            <td>{{$detail->warranty}}</td>
                            <td>
                            <td>
                                <button type="submit"><i class="lnr lnr-cross-circle btn"></i></button>
                            </td>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection