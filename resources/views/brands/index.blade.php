@extends('layouts.app')
@section('content')
@section('pageTitle','Product Brands')
<div class="section-heading">
    <h1 class="page-title">Product Brand list</h1>
    <a href="{{ url('/productBrands/create') }}" class="btn btn-primary btn-lg" role="button"
       aria-disabled="true">Add</a>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="panel-content">
            <table class="table table-striped">
                <thead>
                <th>Name</th>
                <th>Code</th>
                </thead>
                <tbody>
                @foreach($productBrands as $productBrand)
                    <tr>
                        <td>{{$productBrand->name}}</td>
                        <td>{{$productBrand->code}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection