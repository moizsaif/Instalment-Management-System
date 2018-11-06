@extends('layouts.app')
@section('content')
@section('pageTitle','ProductDetails')
    <div class="section-heading">
        <h1 class="page-title">Product Details</h1>
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
                        <th>Quantity</th>
                        <th>Sold</th>
                        <th>Remaining</th>
                        <th>Purchase Price</th>
                        <th>Selling Price</th>
                        <th>Discounted Price</th>

                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($productdetail as $productdetail)
                        <tr>
                            <td><a href={{route('productdetails.show',$productdetail->id)}}/>{{$productdetail->product_id}}</td>
                            <td>{{$productdetail->grn_id}}</td>
                            <td>{{$productdetail->v_id}}</td>
                            <td>{{$productdetail->qty}}</td>
                            <td>{{$productdetail->sold}}</td>
                            <td>{{$productdetail->remaining}}</td>
                            <td>{{$productdetail->purchase_price}}</td>
                            <td>{{$productdetail->selling_price}}</td>
                            <td>{{$productdetail->discounted_price}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection