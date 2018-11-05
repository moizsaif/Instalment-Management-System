@extends('layouts.app')
@section('content')
@section('pageTitle', 'Edit Voucher Type')
    <div class="section-heading">
        <h1 class="page-title">Voucher Types Form</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="/vouchersType/{{$voucherType->id}}" data-parsley-validate novalidate>
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control input-lg" name="name"
                               placeholder="Name" value="{{ $voucherType->name }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label">Code</label>
                        <input type="text" class="form-control input-lg" name="code"
                               placeholder="Code" value="{{ $voucherType->code }}"
                               required data-parsley-length="[2,4]">

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('last_serial_no') ? ' has-error' : '' }}">
                        <label for="last_serial_no" class="control-label">Last Serial Number</label>
                        <input type="text" class="form-control" name="last_serial_no"
                               value="{{ $voucherType->last_serial_no }}" required>

                        @if ($errors->has('last_serial_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_serial_no') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               name="locked" value="1" type="checkbox"
                               data-on="Locked" data-off="Un-Locked">
                        <button style="float:right" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </div>
@endsection
