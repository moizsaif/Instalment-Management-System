@extends('layouts.app')
@section('content')
@section('pageTitle', 'Edit Account')
    <div class="section-heading">
        <h1 class="page-title">Accounts Form</h1>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="/accounts/{{$account->id}}" data-parsley-validate novalidate>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label">Code</label>
                        <input type="text" class="form-control" name="code"
                               value="{{ $account->code }}" required>
                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('opening_balance') ? ' has-error' : '' }}">
                        <label for="opening_balance" class="control-label">Opening Balance</label>
                        <input type="text" class="form-control" name="opening_balance"
                               value="{{ $account->opening_balance }}" required>
                        @if ($errors->has('opening_balance'))
                            <span class="help-block">
                                <strong>{{ $errors->first('opening_balance') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('level_no') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label">Level Number</label>
                        <input readonly type="text" class="form-control" name="level_no"
                               value="{{ $account->level_no }}" required>

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
                               value="{{ $account->alias }}" required>
                        @if ($errors->has('alias'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alias') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="control-label">Description</label>
                        <input type="text" class="form-control" name="description"
                               value="{{ $account->description }}" required>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Allowed" data-off="Not Allowed"
                               name="allow_transac" value="1" type="checkbox">
                        <button style="float:right" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection