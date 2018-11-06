@extends('layouts.app')
@section('page-style')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
@section('pageTitle', 'Add Voucher Type')
    <div class="section-heading">
        <h1 class="page-title">Voucher Types Form</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="{{ url('/vouchersType') }}" data-parsley-validate novalidate>
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" name="name"
                               value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label">Code</label>
                        <input type="text" class="form-control" name="code"
                               value="{{ old('code') }}" required data-parsley-length="[2,4]">


                    </div>

                    <div class="form-group{{ $errors->has('last_serial_no') ? ' has-error' : '' }}">
                        <label for="last_serial_no" class="control-label">Last Serial Number</label>
                        <input type="text" class="form-control" name="last_serial_no"
                               value="{{ old('last_serial_no') }}" required>

                        @if ($errors->has('last_serial_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_serial_no') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input data-onstyle="danger" data-offstyle="success" data-toggle="toggle"
                               data-on="Locked" data-off="Un-Locked"
                               name="locked" value="1" type="checkbox">
                        <button style="float:right" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
