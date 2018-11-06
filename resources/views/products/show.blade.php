@extends('layouts.app')
@section('content')
@section('pageTitle', 'Products')
<h2><a href="{{route('products.show', $product->id)}}">{{$product->code}}</a></h2>
@endsection