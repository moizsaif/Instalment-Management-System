@extends('layouts.app')
@section('pageTitle','Product Categories')
@section('content')
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
                    <th>Code</th>
                    <th></th>
                </thead>
                <tbody >
                @foreach($productCategories as $productCategory)
                    <form method="post" action="/productCategories/{{ $productCategory->id}}">
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <tr>
                            <td>{{$productCategory->name}}</td>
                            <td>{{$productCategory->code}}</td>
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