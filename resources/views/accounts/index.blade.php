@extends('layouts.app')
@section('content')
@section('pageTitle', 'Accounts')
    <div class="section-heading">
        <h1 class="page-title">Accounts List</h1>
        <a href="{{ url('/accounts/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Alias</th>
                        <th>Opening Balance</th>
                        <th>Description</th>
                        <th>Level Number</th>
                        <th>Transaction Allowed</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td><a href={{route('accounts.show',$account->id)}}/>{{$account->code}}</td>
                            <td>{{$account->alias}}</td>
                            <td>{{$account->opening_balance}}</td>
                            <td>{{$account->description}}</td>
                            <td>{{$account->level_no}}</td>
                            <td>
                                @if($account->allow_transac==1)
                                    <text class="btn-success">Yes</text>
                                @else
                                    <text class="btn-danger">No</text>
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