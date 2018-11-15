@extends('layouts.app')
@section('content')
@section('pageTitle', $product->name . 's')
<h2><a href="{{route('products.edit', $product->id)}}">{{$product->code}}</a></h2>
<h2> {{$product->type->name}} </h2>
<a href="{{ url('/productdetails/create') }}" class="btn btn-info btn-lg" role="button"
   aria-disabled="true">Add Stock</a><br>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Batch Quantity</th>
        <th>Sold</th>
        <th>Warranty</th>
        <th>Purchasing</th>
    </tr>
    </thead>
    <tbody>
    @foreach($product->detail as $productdetail)
        <tr>
            <td>{{$productdetail->qty}}</td>
            <td>{{$productdetail->sold_qty}}</td>
            <td>{{$productdetail->warranty}}</td>
            <td>{{$productdetail->purchase_price}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection