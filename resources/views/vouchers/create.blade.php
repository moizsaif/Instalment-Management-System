@extends('layouts.app')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Vouchers Form</h1>
    </div>
    <div class="row">
        <div class="col-md-10 col-lg-6 ">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="{{ url('/vouchers') }}">
                    {{ csrf_field() }}

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
                        <input readonly type="text" class="form-control input-lg" id="created_by" name="created_by"
                               value="{{ Auth::user()->name }}"><br>
                    </div>

                    <div class="form-group input-group">
                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                               data-date-format="yyyy-mm-dd" name="voucher_date" id="voucher_date">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>

                    <div class="form-group">
                        <label>
                            <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                   name="is_approved" value="1" type="checkbox">
                            <span>Approved</span>
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
