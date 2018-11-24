@extends('layouts.app')
@section('page-style')
<style>
    .data{
        width: 80px;
        height: 25px;
        text-align: center;
        padding-top: 2px;
    }
</style>
@endsection
@section('content')
@section('pageTitle', 'Voucher Types')
    <div class="section-heading">
        <h1 class="page-title">Vouchers Types</h1>
        <a href="{{ url('/vouchersType/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr class="">
                        <th>Code</th>
                        <th>Name</th>
                        <th>Last Serial Number</th>
                        <th>Locked</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($vouchersTypes as $vouchersType)
                        <form method="post" action="/vouchersType/{{ $vouchersType->id}}">
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <tr>
                                <td><a href={{route('vouchersType.show',$vouchersType->id)}}/>{{$vouchersType->code}}
                                </td>
                                <td>{{$vouchersType->name}}</td>
                                <td>{{$vouchersType->last_serial_no}}</td>
                                <td>
                                    @if($vouchersType->locked==1)
                                        <span class="label label-danger">Locked</span>
                                    @else
                                        <span class="label label-success">Un-Locked</span>
                                    @endif</td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection