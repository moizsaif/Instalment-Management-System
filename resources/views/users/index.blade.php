@extends('layouts.app')
@section('pageTitle','Users')
@section('page-style')

@endsection
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Users list</h1>
        <a href="{{ url('/users/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 col-sm-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr class="">
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($users as $user)
                        <form method="post" action="/users/{{ $user->id }}">
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->cnic}}</td>
                                <td>{{$user->contact}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->address}}</td>
                                <td>
                                    @if($user->hasRole('User'))
                                        <span class="label label-success">User</span>
                                    @elseif($user->hasRole('Admin'))
                                        <span class="label label-warning">Admin</span>
                                    @elseif($user->hasRole('Customer'))
                                        <span class="label label-info">Customer</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="submit"><i class="lnr lnr-cross-circle btn"></i></button>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('page-script')

@endsection