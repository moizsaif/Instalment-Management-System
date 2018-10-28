@extends('layouts.app')
@section('content')
    <h2><a href="{{route('vouchers.edit', $voucher->id)}}">{{$voucher->code}}</a></h2>
@endsection