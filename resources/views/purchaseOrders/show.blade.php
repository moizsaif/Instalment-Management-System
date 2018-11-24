@extends('layouts.app')
@section('content')

    <a href="{{route('purchaseOrders.edit', $PO->id)}}">{{$PO->no}}</a>
@endsection