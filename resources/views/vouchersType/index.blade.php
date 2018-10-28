@extends('layouts.app')
@section('content')
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
                        <th>Locked</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($vouchersTypes as $vouchersType)
                        <tr>
                            <td><a href={{route('vouchersType.show',$vouchersType->id)}}/>{{$vouchersType->code}}</td>
                            <td>{{$vouchersType->name}}</td>
                            <td>{{$vouchersType->locked}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection