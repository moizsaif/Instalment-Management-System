@extends('layouts.app')
@section('content')
@section('pageTitle', 'GRN')

<div class="section-heading">
        <h1 class="page-title">GRN</h1>
    <a href="{{ url('/grns/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Grn No</th>
                        <th>Grn Date</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Accepted Quantity</th>
                        <th>Rejected Quantity</th>
                        <th>Received By</th>
                        <th>Checked By</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
@foreach($grn as $grn)
    <tr>
        <td><a href={{route('grns.show',$grn->id)}}/></td>
        <td>{{$grn->no}}</td>
        <td>{{$grn->date}}</td>
        <td>{{$grn->status}}</td>
        <td>{{$grn->dsc}}</td>
        <td>{{$grn->accepted_qty}}</td>
        <td>{{$grn->rejected_qty}}</td>
        <td>{{$grn->received_by}}</td>
        <td>{{$grn->checked_by}}</td>
    </tr>
    @endforeach

    </tbody>
    </table>
    </div>
    </div>
    </div>
    @endsection