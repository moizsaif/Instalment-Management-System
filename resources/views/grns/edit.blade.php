@extends('layouts.app')
@section('content')
@section('page-style')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/prism.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
    <style>
        #Desc{
            width: 10%;
        }
        #Uni.Price{
            width: 15%;
        }
        #Ordrd.Qty{
            width: 15%;
        }

        #Acc.Qty{
            width: 15%;
        }
        #Rej.Qty{
            width: 15%;
        }
    </style>
@endsection

@section('pageTitle', 'New GRN')

<div class="section-heading">
    <h1 class="page-title">GRN</h1>
</div>
<div class="row">

    <form class="form-auth-small" role="form" method="POST" action="{{ url('grns') }}" data-parsley-validate novalidate>
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-header">
                <label for="grn_date" class="control-label">GRN Date</label>
                <div class="form-group input-group">
                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                           data-date-format="yyyy-mm-dd" name="grn_date" required>
                    <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                </div>
                <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                    <label for="no" class="control-label">NO</label>
                    <input readonly type="text" class="form-control input-lg" id="no" name="no"
                           value="{{ old('id') }}">

                    @if ($errors->has('no'))
                        <span class="help-block">
                                <strong>{{ $errors->first('no') }}</strong>
                            </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('rcv_frm') ? ' has-error' : '' }}">
                    <label for="rcv_frm" class="control-label">Received From</label>
                    <input type="text" class="form-control input-lg" id="rcv_frm" name="rcv_frm"
                           placeholder="-Enter Name-" value="{{ old('rcv_frm') }}">

                    @if ($errors->has('rcv_frm'))
                        <span class="help-block">
                                <strong>{{ $errors->first('rcv_frm') }}</strong>
                            </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('vhcl_no') ? ' has-error' : '' }}">
                    <label for="vhcl_no" class="control-label">Vehicle No</label>
                    <input type="text" class="form-control input-lg" id="vhcl_no" name="vhcl_no"
                           data-parsley-type="alphanum" placeholder="LEBXXXX" value="{{ old('vhcl_no') }}">

                    @if ($errors->has('vhcl_no'))
                        <span class="help-block">
                                <strong>{{ $errors->first('vhcl_no') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group input-group">
                    <label>
                        <br/><br/>Status <br/><br/>
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Complete" data-off="Incomplete"
                               name="status" value="1" type="checkbox">
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-20">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Description:</th>
                        <th>Unit Price</th>
                        <th>Ordered Quantity</th>
                        <th>Accepted Quantity</th>
                        <th>Rejected Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <div class="form-group{{ $errors->has('dsc') ? ' has-error' : '' }}">
                            <td><input type="text"  class="form-control input-lg" id="dsc" name="dsc"
                                       data-parsley-type="alphanum" placeholder="Product Description" value="{{ old('dsc') }}"/></td>
                            @if ($errors->has('dsc'))
                                <span class="help-block">
                 <strong>{{ $errors->first('dsc') }}</strong>
                 </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('u_price') ? ' has-error' : '' }}">
                            <td><input type="number" class="form-control input-lg" id="u_price" name="u_price" min="0"
                                       data-parsley-type="number" placeholder="-type-" value="{{ old('u_price') }}"></td>
                            @if ($errors->has('u_price'))
                                <span class="help-block">
                 <strong>{{ $errors->first('u_price') }}</strong>
                 </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('u_qty') ? ' has-error' : '' }}">
                            <td><input type="number" class="form-control input-lg" id="u_qty" name="u_qty"
                                       min="0" data-parsley-type="number" placeholder="-type-" value="{{ old('u_qty') }}"></td>
                            @if ($errors->has('u_qty'))
                                <span class="help-block">
                <strong>{{ $errors->first('u_qty') }}</strong>
                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('accepted_qty') ? ' has-error' : '' }}">
                            <td><input type="number" class="form-control input-lg" id="accepted_qty" name="accepted_qty"
                                       min="1" data-parsley-type="number"  placeholder="-type-" value="{{ old('accepted_qty') }}"></td>
                            @if ($errors->has('accepted_qty'))
                                <span class="help-block">
                 <strong>{{ $errors->first('accepted_qty') }}</strong>
                 </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('rejected_qty') ? ' has-error' : '' }}">
                            <td><input type="number" class="form-control input-lg" id="rejected_qty" name="rejected_qty"
                                       min="0"  data-parsley-type="number" placeholder="-type-" value="{{ old('rejected_qty') }}"></td>
                            @if ($errors->has('rejected_qty'))
                                <span class="help-block">
                 <strong>{{ $errors->first('rejected_qty') }}</strong>
                 </span>
                            @endif
                        </div>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-lg-9 col-md-11 col-sm-12">
            <div class="panel-content">
                <button type="button" class="add-row btn btn-success" id="add-row">Add Row</button>
                <button type="button" class="delete-row btn btn-danger" id="delete-row">Delete Row</button>

            </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-footer">
                <div class="form-group{{ $errors->has('received_by') ? ' has-error' : '' }}">
                    <label for="received_by" class="control-label">Received By:</label>
                    <input type="text" class="form-control input-lg" id="received_by" name="received_by"
                           data-parsley-type="alphanum" placeholder="Add Name" value="{{ old('received_by') }}">

                    @if ($errors->has('received_by'))
                        <span class="help-block">
                                <strong>{{ $errors->first('received_by') }}</strong>
                            </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('checked_by') ? ' has-error' : '' }}">
                    <label for="checked_by" class="control-label">Checked By:</label>
                    <input type="text" class="form-control input-lg" id="checked_by" name="checked_by"

                           data-parsley-type="alphanum" placeholder="Add name" value="{{ old('checked_by') }}">

                    @if ($errors->has('checked_by'))
                        <span class="help-block">
                                <strong>{{ $errors->first('checked_by') }}</strong>
                            </span>
                    @endif

                </div>
                <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
            </div>
        </div>



    </form>
</div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/parsley.min.js') }}"></script>
    <script>



        $(".add-row").click(function(){
            var r = "<tr>" +
                "<td id='Desc'>" +
                "<input type='text' class='form-control' name='dsc' placeholder='type' required " +
                "                       data-parsley-type=\"alphanum\"            value='{{ old('dsc') }}'></td>" +
                "<td id='Uni.Price'>" +
                "<input type='text' class='form-control' name='u_price' placeholder='type' required" +
                "                          data-parsley-type=\"number\"         value='{{ old('u_price') }}'></td>" +
                "<td id='Ordrd.Qty'>" +
                "<input type='text' class='form-control' name='u_qty' placeholder='type' required" +
                "                       data-parsley-type=\"number\"            value='{{ old('u_qty') }}'></td>" +
                "<td id='Acc.Qty'>" +
                "<input type='text' class='form-control' name='accepted_qty' placeholder='type' required" +
                "                          data-parsley-type=\"number\"         value='{{ old('accepted_qty') }}'></td>" +
                "<td id='Rej.Qty'>" +
                "<input type='text' class='form-control' name='rejected_qty' placeholder='type' required" +
                "                               data-parsley-type=\"number\"    value='{{ old('rejected_qty') }}'></td>" +
                "<td><input type='checkbox' name='chk'></td></tr>";
            $("table tbody").append(r);
        });

        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="chk"]').each(function(){
                $(this).parents("tr").remove();
            });
        });
    </script>
@endsection



