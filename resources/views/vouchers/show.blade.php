@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher')
    <h2><a href="{{route('vouchers.edit', $voucher->id)}}">{{$voucher->no}}</a></h2>
    <h2> {{$voucher->type->name}} </h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Account</th>
        <th>Debit</th>
        <th>Credit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($voucher->details as $details)
        <tr>
            <td><a href="{{route('accounts.show', $details->acc_id)}}">{{$details->account->name}}</a></td>
            <td>{{$details->debit}}</td>
            <td>{{$details->credit}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection