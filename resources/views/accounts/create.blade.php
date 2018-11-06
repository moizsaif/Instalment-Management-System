@extends('layouts.app')
@section('page-style')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
@section('pageTitle', 'New Account')
    <div class="section-heading">
        <h1 class="page-title">Accounts Form</h1>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="{{ url('/accounts') }}" data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label">Code</label>
                        <input type="text" class="form-control" name="code"
                               value="{{ old('code') }}" required>
                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('opening_balance') ? ' has-error' : '' }}">
                        <label for="opening_balance" class="control-label">Current Balance</label>
                        <input type="text" class="form-control" name="current_balance"
                               value="{{ old('current_balance') }}" required data-parsley-length="[1,8]">
                        @if ($errors->has('current_balance'))
                            <span class="help-block">
                                <strong>{{ $errors->first('current_balance') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('level_no') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label">Level Number</label>
                        <input readonly type="text" class="form-control" name="level_no"
                               value="{{ old('level_no') }}">

                        @if ($errors->has('level_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('level_no') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                        <label for="alias" class="control-label">Alias</label>
                        <input type="text" class="form-control" name="alias"
                               value="{{ old('alias') }}" >
                        @if ($errors->has('alias'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alias') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">name</label>
                        <input type="text" class="form-control" name="name"
                               value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>
                            <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                   data-on="Allowed" data-off="Not Allowed"
                                   name="allow_transac" value="1" type="checkbox">
                        </label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('page-script')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection