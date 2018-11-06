@extends('layouts.app')
@section('page-style')
    {{--<link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/prism.css') }}">--}}
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
<style>
    #acc{
        width: 90%;
    }
    .amount{
        width: 75%;
    }
</style>
@endsection
@section('pageTitle', 'Add Voucher')
@section('content')
    <div class="section-heading">
        <h2 class="page-title">Voucher Form</h2>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="{{ url('/vouchers') }}" data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="panel-content">

                    <label for="voucher_date" class="control-label">Voucher Date</label>
                    <div class="form-group input-group">
                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                               data-date-format="yyyy-mm-dd" name="voucher_date" required>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <select class="form-control" id="type_id" name="type_id" required>
                            <option value="">Select Voucher Type</option>
                            @foreach($voucherTypes as $voucherType)
                                @if($voucherType->locked==0)
                                    <option value="{{$voucherType->id}}">{{$voucherType->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                        <label for="no" class="control-label">Number</label>
                        <input readonly type="text" class="form-control" name="no"
                               id="no" value="{{ old('no') }}">

                        @if ($errors->has('no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="panel-content">

                    <div class="form-group">
                        <label for="created_by" class="control-label">Created By</label>
                        <input readonly type="text" class="form-control" name="created_by"
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

            <div class="col-lg-8 col-md-10 col-sm-10">
                <div class="panel-content">
                    <h4>Voucher Details</h4>
                    <button type="button" id="add-row" class="btn btn-success">Add Row</button>
                    <button type="button" id="delete-row" class="btn btn-danger">Delete Row</button>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Account</th>
                            <th>Transaction</th>
                            <th>Amount</th>
                            <th>Select</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <select id='acc' class='chosen-select' name='acc_id[]' required>
                                    <option value=''>Select Account</option>
                                       @foreach($accounts as $account)
                                           @if($account->allow_transac==1)
                                              <option value={{$account->id}}>{{$account->name}}</option>
                                           @endif
                                       @endforeach
                                </select>
                            </td>
                            <td>
                                <select id='' class='amount chosen-select' name='transac_type[]' required>
                                    <option value=''>Select Transaction</option>
                                    <option value='0'>Debit</option>
                                    <option value='1'>Credit</option></select></td>
                            <td>
                                <input id='amount' type='text' class='form-control amount' id='amount' name='amount[]'
                                       required value='{{ old('amount') }}'>
                            </td>
                            <td>
                                <input type='checkbox' name='record'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    {{--<script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>--}}
    <script>

        $(document).ready(function(){

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

            $("#add-row").click(function(){
                var markup = "<tr><td><select id='acc' class='form-control' name='acc_id[]' required>" +
                    "   @foreach($accounts as $account)" +
                    "       @if($account->allow_transac==1)" +
                    "           <option value={{$account->id}}>{{$account->name}}</option>" +
                    "       @endif" +
                    "   @endforeach" +
                    "</select></td><td>" +
                    "<select id='' class='form-control amount' name='transac_type[]' required>" +
                    "<option value=''>Select Transaction</option>" +
                    "<option value='0'>Debit</option>" +
                    "<option value='1'>Credit</option></select></td>" +
                    "<td><input id='amount' type='text' class='form-control amount' id='amount' name='amount[]' required" +
                    "       value='{{ old('amount') }}'></td>" +
                    "<td><input type='checkbox' name='record'></td></tr>";
                $("table tbody").append(markup);
            });


            // Find and remove selected table rows
            $("#delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
        });

        
    </script>
@endsection

