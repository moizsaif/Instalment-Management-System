@extends('layouts.app')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Accounts List</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Alias</th>
                        <th>Description</th>
                        <th>Level Number</th>
                        <th>Transaction Allowed</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($accounts as $account)
                        <tr>
                            <td><a href={{route('accounts.show',$account->id)}}/>{{$account->code}}</td>
                            <td>{{$account->alias}}</td>
                            <td>{{$account->description}}</td>
                            <td>{{$account->level_no}}</td>
                            <td>{{$account->is_trans_allowed}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection