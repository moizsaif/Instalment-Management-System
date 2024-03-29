@extends('layouts.app')
@section('page-style')
    <style>
        .data{
            width: 50px;
            text-align: center;
            padding-top: 1px;
        }
    </style>
@endsection
@section('pageTitle', 'Vouchers')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Vouchers List</h1>
        <a href="{{ url('/vouchers/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
        <a href="{{ url('/vouchersType/') }}" class="btn btn-warning btn-lg" role="button" aria-disabled="true">Types</a>
        <a href="{{ url('/vouchersType/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add Voucher Type</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                @if($reason != null)
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <i class="fa fa-check-circle"></i>{{$reason}}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Number</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Approved</th>
                        <th>Created By</th>
                        <th>Entries</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vouchers as $voucher)
                        <tr>
                            <td><a href={{route('vouchers.show',$voucher->id)}}/>{{$voucher->no}}</td>
                            <td><a href={{route('vouchersType.show',$voucher->type->id)}}/>{{$voucher->type->name}}</td>
                            <td>{{$voucher->voucher_date}}</td>
                            <td>{{$voucher->year}}</td>
                            <td>{{$voucher->month}}</td>
                            <td>
                                @if($voucher->is_approved==1)
                                    <span class="label label-success">Yes</span>
                                @else
                                    <span class="label label-danger">No</span>
                                @endif</td>
                            <td>{{$voucher->created_by}}</td>
                            <td>{{$voucher->details->count()}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        $(function () {
            var notify='Voucher added/updated';
            // notification popup

            @if(session()->has('success'))
                toastr.options.closeButton = true;
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.showDuration = 1000;
                toastr['success'](notify);
            @endif
        });
    </script>
@endsection

