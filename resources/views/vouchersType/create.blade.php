@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher Type')
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
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label">Code</label>
                        <input type="text" class="form-control" id="code" name="code"
                               value="{{ old('code') }}" required data-parsley-length="[2,4]">


                    </div>

                    <div class="form-group{{ $errors->has('last_serial_no') ? ' has-error' : '' }}">
                        <label for="last_serial_no" class="control-label">Last Serial Number</label>
                        <input type="text" class="form-control" id="last_serial_no" name="last_serial_no"
                               value="{{ old('last_serial_no') }}" required>

                        @if ($errors->has('last_serial_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_serial_no') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Locked" data-off="Un-Locked"
                               name="locked" value="1" type="checkbox">
                        <button style="float:right" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
