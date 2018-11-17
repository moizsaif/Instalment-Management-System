@extends('layouts.app')
@section('pageTitle','Users')
@section('page-style')

@endsection
@section('content')

    <table class="table table-striped">
        <thead>
        <tr class="">
            <th>Name</th>
            <th>CNIC</th>
            <th>Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>User</th>
            <th>Admin</th>
            <th>Customer</th>
        </tr>
        </thead>
        <tbody class="">
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->cnic}}</td>
                <td>{{$user->contact}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td><input type="checkbox" {{$user->hasRole('User') ? 'checked' : ''}}></td>
                <td><input type="checkbox" {{$user->hasRole('Admin') ? 'checked' : ''}}></td>
                <td><input type="checkbox" {{$user->hasRole('Customer') ? 'checked' : ''}}></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
@section('page-script')

@endsection