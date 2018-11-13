@extends('layouts.app')
@section('content')
@section('pageTitle','Product Details')

<h2>Main Product<br><a href="{{route('products.show', $ProductDetail->pr_id)}}">{{$ProductDetail->product->name}}</a>
</h2>
<h2>Batch<br><a href="{{route('productdetails.edit', $ProductDetail->id)}}">{{$ProductDetail->model}}</a></h2>

@endsection