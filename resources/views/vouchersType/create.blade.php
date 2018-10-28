@extends('layouts.app')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Voucher Types Form</h1>
    </div>
    <div class="row">
        <div class="col-md-10 col-lg-6 ">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="{{ url('/vouchersType') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label sr-only">Code</label>
                        <input type="text" class="form-control input-lg" id="name" name="name"
                               placeholder="Name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="alias" class="control-label sr-only">Code</label>
                        <input type="text" class="form-control input-lg" id="code" name="code"
                               placeholder="Code" value="{{ old('code') }}">

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>
                            <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                   name="locked" value="1" type="checkbox">
                            <span>Locked</span>
                        </label><br><br>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Save</button>
					    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
