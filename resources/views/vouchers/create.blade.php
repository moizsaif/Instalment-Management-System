@extends('layouts.app')
@section('content')
@section('pageTitle', 'Voucher')
    <div class="section-heading">
        <h2 class="page-title">Voucher Form</h2>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="{{ url('/vouchers') }}" data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">

                    <label for="voucher_date" class="control-label">Voucher Date</label>
                    <div class="form-group input-group">
                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                               data-date-format="yyyy-mm-dd" name="voucher_date" id="voucher_date" required>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <select class="form-control" id="type_id" name="type_id" required>
                            <option selected="selected" value="">Select Voucher Type</option>
                            @foreach($voucherTypes as $voucherType)
                                @if($voucherType->locked==0)
                                    <option value="{{$voucherType->id}}">{{$voucherType->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                        <label for="no" class="control-label">Number</label>
                        <input readonly type="text" class="form-control" id="no" name="no"
                               value="{{ old('no') }}" required>

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
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Approved" data-off="Un-Approved"
                               name="is_approved" value="1" type="checkbox">
                        <button style="float:right" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-lg-9 col-md-11 col-sm-12">
            <div class="panel-content">
                <h4>Voucher Details</h4>
                <br><br>
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            Type
                        </th>
                        <th>
                            Debit
                        </th>
                        <th>
                            Credit
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tr id="detail">
                        <td style="width: 50%">
                            <div class="form-group">
                                <select class="form-control" id="type_id" name="type_id">
                                    @foreach($accounts as $account)
                                        @if($account->allow_transac==1)
                                            <option value="{{$account->id}}">{{$account->description}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td style="width: 15%">
                            <div class="form-group{{ $errors->has('debit') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" id="debit" name="debit"
                                       value="{{ old('debit') }}"><br>
                                @if ($errors->has('debit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('debit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                        <td style="width: 15%">
                            <div class="form-group{{ $errors->has('credit') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" id="credit" name="credit"
                                       value="{{ old('credit') }}"><br>
                                @if ($errors->has('credit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('credit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-successapp" id="add">Add</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" id="add">Remove</button>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        document.getElementById("type_id").onclick=function () {
            var serials = [];

            @foreach ($voucherTypes as $voucherType)
                @if($voucherType->locked==0)
                    serials.push('{{ $voucherType->last_serial_no }}');
                @else
                    serials.push('0')
                @endif
            @endforeach

            var type_id = document.getElementById("type_id").value;
            document.getElementById("no").value = serials[type_id-1];
        };
        document.getElementById("add").onclick=function () {

        };
    </script>
@endsection

