@extends('layouts.app')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Vouchers List</h1>
        <a href="{{ url('/vouchers/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center">
                        <th>Code</th>
                        <th>Date Created</th>
                        <th>Date</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Approved</th>
                        <th>Created By</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($vouchers as $voucher)
                        <tr>
                            <td><a href={{route('vouchers.show',$voucher->id)}}/>{{$voucher->code}}</td>
                            <td>{{$voucher->created_at}}</td>
                            <td>{{$voucher->voucher_date}}</td>
                            <td>{{$voucher->year}}</td>
                            <td>{{$voucher->month}}</td>
                            <td>{{$voucher->is_approved}}</td>
                            <td>{{$voucher->created_by}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection