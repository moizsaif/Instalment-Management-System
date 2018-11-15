@extends('layouts.app')
@section('page-style')
    <style>
        .data {
            width: 70px;
            text-align: center;
            padding-top: 1px;
        }
    </style>
@section('content')
@section('pageTitle', 'Monthly Installments')
@section('content')

<h2>Installment Number: <a href="{{route('installments.edit', $installment->id)}}">{{$installment->no}}</a></h2>
<h2><a href="#">Customer Profile</a></h2>
{{--{{route('customers.show', $installment->id)}}--}}
<table class="table table-striped">
    <thead>
    <tr>
        <th>Due Date</th>
        <th>Amount</th>
        <th>Received</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($installment->monthlyDetails as $detail)
        <tr>
            <td>{{$detail->due_date}}</td>
            <td>{{$detail->amount}}</td>
            <td>{{$detail->received_amount}}</td>
            <td>
                @if($detail->status)
                    <p class="btn-success data">Paid</p>
                @else
                    <p class="btn-danger data">Un-Paid</p>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>

@endsection