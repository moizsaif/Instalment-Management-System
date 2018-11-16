@extends('layouts.app')
@section('page-style')

@endsection
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
                    <span class="label label-success">Paid</span>
                @else
                    <span class="label label-warning">Un-Paid</span>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection