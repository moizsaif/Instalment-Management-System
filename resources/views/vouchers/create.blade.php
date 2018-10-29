@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher')
    <div class="section-heading">
        <h1 class="page-title">Vouchers Form</h1>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="{{ url('/vouchers') }}">
            {{ csrf_field() }}
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">

                    <label for="voucher_date" class="control-label">Voucher Date</label>
                    <div class="form-group input-group">
                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                               data-date-format="yyyy-mm-dd" name="voucher_date" id="voucher_date">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <select class="form-control" id="type_id" name="type_id">
                            @foreach($voucherTypes as $voucherType)
                                <option value="{{$voucherType->id}}">{{$voucherType->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                        <label for="no" class="control-label">Number</label>
                        <input readonly type="text" class="form-control" id="no" name="no"
                               value="{{ old('no') }}">

                        @if ($errors->has('no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">

                    <div class="form-group">
                        <label for="created_by" class="control-label">Created By</label>
                        <input readonly type="text" class="form-control" id="created_by" name="created_by"
                               value="{{ Auth::user()->name }}"><br>
                    </div>

                    <div class="form-group">
                        <label for="is_approved" class="control-label">Is Approved</label>
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               name="is_approved" value="1" type="checkbox">
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
    <script>
        document.getElementById("type_id").onclick=function () {
            var serials = [];
            @foreach ($voucherTypes as $voucherType)
            serials.push('{{ $voucherType->last_serial_no }}');
                    @endforeach
            var type_id = document.getElementById("type_id").value;
            document.getElementById("no").value = serials[type_id-1];
        }
    </script>

@endsection

