@extends('layouts.app')
@section('content')
@section('pageTitle', 'Account')
    <h2>{{$account->alias}}<br><br><a href="{{route('accounts.edit', $account->id)}}">{{$account->code}}</a></h2>
@endsection