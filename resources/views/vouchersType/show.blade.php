@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher Type')
    <h2><a href="{{route('vouchersType.edit', $voucherType->id)}}">{{$voucherType->code}}</a></h2>
@endsection
