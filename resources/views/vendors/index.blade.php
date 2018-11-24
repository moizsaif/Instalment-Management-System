@extends('layouts.app')
@section('content')
@section('pageTitle', 'Vendors')

<div class="section-heading">
    <h1 class="page-title">Vendors</h1>
    <a href="{{ url('/vendors/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="panel-content">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Iban</th>
                    <th>CNIC</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>

                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($vendors as $vendor)
                    <tr>
                        <td><a href={{route('vendors.show',$vendor->id)}}/></td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->iban}}</td>
                        <td>{{$vendor->cnic}}</td>
                        <td>{{$vendor->contact_no}}</td>
                        <td>{{$vendor->email}}</td>
                        <td>{{$vendor->address}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection