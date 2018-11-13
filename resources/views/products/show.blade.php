@extends('layouts.app')
@section('content')
@section('pageTitle', $product->type->name . 's')
<h2><a href="{{route('products.show', $product->id)}}">{{$product->code}}</a></h2>
<h2> {{$product->type->name}} </h2>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Model</th>
        <th>Description</th>
        <th>Color</th>
        <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    @foreach($product->detail as $productdetail)
        <tr>
            <td>
                <a href={{route('productdetails.edit',$productdetail->id)}}/>{{$productdetail->model}}
            </td>
            <td>{{$productdetail->description}}</td>
            <td>{{$productdetail->color}}</td>
            <td>{{$productdetail->qty}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection