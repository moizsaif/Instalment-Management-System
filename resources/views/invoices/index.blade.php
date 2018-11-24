@extends('layouts.app')
@section('pageTitle','Invoices')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Invoices</h1>
        <a href="{{ url('/invoices/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add New Invoice</a>
        <a href="{{ url('/invoices/edit') }}" class="btn btn-default-dark btn-lg" role="button"
           aria-disabled="true">Edit Invoice</a>
        <a href="{{ url('/installments/create') }}" class="btn btn-warning btn-lg" role="button"
           aria-disabled="true">Add Installment Invoice</a>
        <a href="{{ url('/invoices/') }}" class="btn btn-danger btn-lg" role="button"
           aria-disabled="true">Delete Invoice</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Invoice#</th>
                        <th>Catalogues</th>
                        <th>Invoice Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inv as $invs)
                        <tr>
                            <td><a href={{route('invoices.show',$invs->id)}}/>{{$invs->no}}</td>
                            <td>{{$invs->item_code}}</td>
                            <td>{{$invs->total_amount}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection