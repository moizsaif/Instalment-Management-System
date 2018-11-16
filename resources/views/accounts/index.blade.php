@extends('layouts.app')
@section('page-style')
    <style>
        .data{
            width: 50px;
            text-align: center;
            padding-top: 1px;
        }
    </style>
@endsection
@section('pageTitle', 'Accounts')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Accounts List</h1>
        <a href="{{ url('/accounts/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add
            Account</a>
        <a href="{{ url('/vouchers/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add
            Voucher</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th class="text-center">Current Balance</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Level Number</th>
                        <th>Transaction Allowed</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td><a href={{route('accounts.show',$account->id)}}/>{{$account->code}}</td>
                            <td class="text-center">{{$account->current_balance}}</td>
                            <td>{{$account->name}}</td>
                            <td class="text-center">{{$account->level_no}}</td>
                            <td>
                                @if($account->allow_transac==1)
                                    <span class="label label-success">Yes</span>
                                @else
                                    <span class="label label-danger">No</span>
                                @endif</td>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection