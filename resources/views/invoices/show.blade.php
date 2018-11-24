@extends('layouts.app')
@section('content')

    <a href="{{route('invoices.edit', $inv->id)}}">{{$inv->no}}</a>
@endsection