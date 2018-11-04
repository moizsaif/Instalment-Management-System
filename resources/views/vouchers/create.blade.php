@extends('layouts.app')
@section('page-style')
<style>
    #select{
        width: 50%;
    }
    #credit{
        width: 15%;
    }
    #debit{
        width: 15%;
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
            <div class="col-lg-4 col-md-5 col-sm-6">
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
            <div class="col-lg-4 col-md-5 col-sm-6">
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

            <div class="col-lg-9 col-md-11 col-sm-12">
                <div class="panel-content">
                    <h4>Voucher Details</h4>
                    <button type="button" class="add-row btn btn-success">Add Row</button>
                    <button type="button" class="delete-row btn btn-danger">Delete Row</button>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Select</th>
                            <th>Account</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page-script')
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

            $(".add-row").click(function(){
                var markup = "<tr>" +
                    "<td><input type='checkbox' name='record'></td>" +
                    "<td id='select'><select name='acc_id[]'>" +
                    "   @foreach($accounts as $account)\n" +
                    "       @if($account->allow_transac==1)\n" +
                    "           <option value=\"{{$account->id}}\">{{$account->description}}</option>\n" +
                    "       @endif\n" +
                    "   @endforeach\n" +
                    "</select></td>"+
                    "<td id='debit'>" +
                    "<input type='text' class='form-control' name='debit[]'\n" +
                    "                                   value='{{ old('debit') }}'></td>" +
                    "<td id='credit'>" +
                    "<input type='text' class='form-control' name='credit[]'\n" +
                    "                                   value='{{ old('credit') }}'></td>" +
                    "</td></tr>";
                $("table tbody").append(markup);
            });

            // Find and remove selected table rows
            $(".delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>
@endsection

