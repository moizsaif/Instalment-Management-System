@extends('layouts.app')
@section('content')
@section('pageTitle','Product Categories')
<div class="section-heading">
    <h1 class="page-title">Product Category list</h1>
    <a href="{{ url('/productCategories/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="panel-content">
            <table class="table table-striped">
                <thead>
                    <th>Name</th>


                </thead>
                <tbody >
                @foreach($productCategories as $productCategory)
                    <tr>
                        <td>{{$productCategory->name}}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection