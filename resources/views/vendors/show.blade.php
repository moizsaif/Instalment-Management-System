@extends('layouts.app')
@section('content')
@section('pageTitle', 'GRN')
<a href="{{route('vendors.edit', $vendors->id)}}"></a>
@endsection