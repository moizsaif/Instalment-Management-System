@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher Type')
    <div class="section-heading">
        <h1 class="page-title">Voucher Types Form</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="/vouchersType/{{$voucherType->id}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control input-lg" id="name" name="name"
                               placeholder="Name" value="{{ $voucherType->name }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label">Code</label>
                        <input type="text" class="form-control input-lg" id="code" name="code"
                               placeholder="Code" value="{{ $voucherType->code }}">

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('last_serial_no') ? ' has-error' : '' }}">
                        <label for="last_serial_no" class="control-label">Last Serial Number</label>
                        <input type="text" class="form-control" id="last_serial_no" name="last_serial_no"
                               value="{{ $voucherType->last_serial_no }}">

                        @if ($errors->has('last_serial_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_serial_no') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="locked" class="control-label">Locked</label>
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               name="locked" value="1" type="checkbox">
                        <br><br>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </div>
@endsection
