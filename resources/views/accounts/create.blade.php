@extends('layouts.app')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Accounts Form</h1>
    </div>
    <div class="row">
        <div class="col-md-10 col-lg-6">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="{{ url('/accounts') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                        <label for="alias" class="control-label sr-only">alias</label>
                        <input type="text" class="form-control input-lg" id="alias" name="alias" placeholder="Alias"
                               value="{{ old('alias') }}">

                        @if ($errors->has('alias'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alias') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label sr-only">Code</label>
                        <input type="text" class="form-control input-lg" id="code" name="code" placeholder="Code"
                               value="{{ old('code') }}">

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="control-label sr-only">Description</label>
                        <input type="text" class="form-control input-lg" id="description" name="description" placeholder="Description"
                               value="{{ old('description') }}">

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('level_no') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label sr-only">Level Number</label>
                        <input type="number" class="form-control input-lg" id="level_no" name="level_no" placeholder="Level Number"
                               value="{{ old('level_no') }}">

                        @if ($errors->has('level_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('level_no') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group input-group">
                        <label class="fancy-checkbox">
                            <input id="is_trans_allowed" name="is_trans_allowed" type="checkbox"><span>Transaction Allowed</span>
                        </label>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Save</button>
					    </span>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection