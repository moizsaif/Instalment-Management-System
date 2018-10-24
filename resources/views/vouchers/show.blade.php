@extends('layouts.app')
@section('content')
    <a href="{{route('vouchers.edit', $voucher->id)}}">{{$voucher->code}}</a>
@endsection