@extends('layouts.app')
@section('content')
@section('pageTitle', 'GRN')
    <a href="{{route('grns.edit', $grn->id)}}">{{$grn->no}}</a>
@endsection