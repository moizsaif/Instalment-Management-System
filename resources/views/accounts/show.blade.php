@extends('layouts.app')
@section('content')
    <a href="{{route('accounts.edit', $account->id)}}">{{$account->code}}</a>
@endsection