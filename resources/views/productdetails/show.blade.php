@extends('layouts.app')
@section('content')
@section('pageTitle','')
    <a href="{{route('productdetails.edit', $productdetail->id)}}">{{$productdetail->code}}</a>
@endsection