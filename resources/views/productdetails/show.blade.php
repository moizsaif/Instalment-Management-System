@extends('layouts.app')
@section('content')
@section('pageTitle','Product Details')
    <a href="{{route('productdetails.edit', $productdetail->id)}}">{{$productdetail->code}}</a>
@endsection