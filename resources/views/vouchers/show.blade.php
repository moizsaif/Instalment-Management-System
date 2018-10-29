@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher')
    <h2><a href="{{route('vouchers.edit', $voucher->id)}}">{{$voucher->no}}</a></h2>
    <h2> {{$voucher->type->name}} </h2>
@endsection