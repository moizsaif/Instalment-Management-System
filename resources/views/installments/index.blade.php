@extends('layouts.app')
@section('pageTitle', 'Installment Plans')
@section('content')

<div class="section-heading">
    <h1 class="page-title">Installment Plans</h1>
    <a href="{{ url('/installments/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="panel-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Down Payment</th>
                    <th>Start Date</th>
                    <th>No of Months</th>
                    <th>Paid Months</th>
                    <th>Approved</th>
                    <th>Completed</th>
                </tr>
                </thead>
                <tbody>
                @foreach($installments as $installment)
                    <tr>
                        <td><a href={{route('installments.show',$installment->id)}}/>{{$installment->no}}</td>
                        <td>{{$installment->customer_no}}</td>
                        <td>{{$installment->total_amount}}</td>
                        <td>{{$installment->down_payment}}</td>
                        <td>{{$installment->start_date}}</td>
                        <td>{{$installment->total_months}}</td>
                        <td>{{$installment->paid_months}}</td>
                        <td>{{$installment->approved_status}}</td>
                        <td>
                            @if($installment->total_months == $installment->paid_months)
                                <span class="label label-success">COMPLETED</span>
                            @else
                                <span class="label label-warning">In-Progress</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
@section('page-script')

@endsection