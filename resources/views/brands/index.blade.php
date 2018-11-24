@extends('layouts.app')
@section('pageTitle','Product Brands')
@section('content')
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
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($productBrands as $productBrand)
                    <form method="post" action="/productBrands/{{ $productBrand->id}}">
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <tr>
                            <td>{{$productBrand->name}}</td>
                            <td>{{$productBrand->code}}</td>
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