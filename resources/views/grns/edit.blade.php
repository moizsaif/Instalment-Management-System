@extends('layouts.app')
@section('content')
@section('pageTitle', 'Edit GRN')
<div class="section-heading">
    <h1 class="page-title">GRN</h1>
</div>
<div class="row">

    <form class="form-auth-small" role="form" method="POST" action="{{ url('/grn') }}" data-parsley-validate novalidate>
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-header">

                <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                    <label for="no" class="control-label">NO</label>
                    <input type="text" class="form-control input-lg" id="no" name="no" placeholder="-Add No-"
                           value="{{ old('no') }}">

                    @if ($errors->has('no'))
                        <span class="help-block">
                                <strong>{{ $errors->first('no') }}</strong>
                            </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('rcv_frm') ? ' has-error' : '' }}">
                    <label for="rcv_frm" class="control-label">Received From</label>
                    <input type="text" class="form-control input-lg" id="rcv_frm" name="rcv_frm" placeholder="-Enter Name-" value="{{ old('rcv_frm') }}">

                    @if ($errors->has('rcv_frm'))
                        <span class="help-block">
                                <strong>{{ $errors->first('rcv_frm') }}</strong>
                            </span>
                    @endif

                </div>


                <div class="form-group{{ $errors->has('vhcl_no') ? ' has-error' : '' }}">
                    <label for="vhcl_no" class="control-label">Vehicle No</label>
                    <input type="text" class="form-control input-lg" id="vhcl_no" name="vhcl_no" placeholder="-Add No-" value="{{ old('vhcl_no') }}">

                    @if ($errors->has('vhcl_no'))
                        <span class="help-block">
                                <strong>{{ $errors->first('vhcl_no') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group input-group">
                    <label>
                        Status <br/><br/>
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Active" data-off="Not Active"
                               name="status" value="1" type="checkbox">
                    </label>

                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                <div class="form-group{{ $errors->has('dsc') ? ' has-error' : '' }}">
                                    <label for="dsc" class="control-label">Description</label>
                                    <input type="text"  class="form-control input-lg" id="dsc" name="dsc" placeholder="-type-" value="{{ old('dsc') }}"/>
                                    <input type="text"  class="form-control input-lg" id="dsc1" name="dsc1" placeholder="-type-" value="{{ old('dsc') }}"/>
                                    <input type="text"  class="form-control input-lg" id="dsc2" name="dsc2" placeholder="-type-" value="{{ old('dsc') }}"/>
                                    <input type="text"  class="form-control input-lg" id="dsc3" name="dsc3" placeholder="-type-" value="{{ old('dsc') }}"/>
                                    <input type="text"  class="form-control input-lg" id="dsc4" name="dsc4" placeholder="-type-" value="{{ old('dsc') }}"/>
                                    @if ($errors->has('dsc'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('dsc') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </th>
                            <th>
                                <div class="form-group{{ $errors->has('dsc') ? ' has-error' : '' }}">
                                    <label for="u_price" class="control-label">Unit Price</label>
                                    <input type="number" class="form-control input-lg" id="u_price" name="u_price" placeholder="-type-" value="{{ old('u_price') }}">
                                    <input type="number" class="form-control input-lg" id="u_price1" name="u_price1" placeholder="-type-" value="{{ old('u_price') }}">
                                    <input type="number" class="form-control input-lg" id="u_price2" name="u_price2" placeholder="-type-" value="{{ old('u_price') }}">
                                    <input type="number" class="form-control input-lg" id="u_price3" name="u_price3" placeholder="-type-" value="{{ old('u_price') }}">
                                    <input type="number" class="form-control input-lg" id="u_price4" name="u_price4" placeholder="-type-" value="{{ old('u_price') }}">

                                    @if ($errors->has('u_price'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('u_price') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </th>

                            <th>
                                <div class="form-group{{ $errors->has('accepted_qty') ? ' has-error' : '' }}">
                                    <label for="accepted_qty" class="control-label">Accepted Quantity</label>
                                    <input type="number" class="form-control input-lg" id="accepted_qty" name="accepted_qty" placeholder="-type-" value="{{ old('accepted_qty') }}">
                                    <input type="number" class="form-control input-lg" id="accepted_qty1" name="accepted_qty1" placeholder="-type-" value="{{ old('accepted_qty') }}">
                                    <input type="number" class="form-control input-lg" id="accepted_qty2" name="accepted_qty2" placeholder="-type-" value="{{ old('accepted_qty') }}">
                                    <input type="number" class="form-control input-lg" id="accepted_qty3" name="accepted_qty3" placeholder="-type-" value="{{ old('accepted_qty') }}">
                                    <input type="number" class="form-control input-lg" id="accepted_qty4" name="accepted_qty4" placeholder="-type-" value="{{ old('accepted_qty') }}">



                                    @if ($errors->has('accepted_qty'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('accepted_qty') }}</strong>
                            </span>
                                    @endif

                                </div>
                            </th>

                            <th>
                                <div class="form-group{{ $errors->has('rejected_qty') ? ' has-error' : '' }}">
                                    <label for="rejected_qty" class="control-label">Rejected Quantity</label>
                                    <input type="number" class="form-control input-lg" id="rejected_qty" name="rejected_qty" placeholder="-type-" value="{{ old('rejected_qty') }}">
                                    <input type="number" class="form-control input-lg" id="rejected_qty1" name="rejected_qty1" placeholder="-type-" value="{{ old('rejected_qty') }}">
                                    <input type="number" class="form-control input-lg" id="rejected_qty2" name="rejected_qty2" placeholder="-type-" value="{{ old('rejected_qty') }}">
                                    <input type="number" class="form-control input-lg" id="rejected_qty3" name="rejected_qty3" placeholder="-type-" value="{{ old('rejected_qty') }}">
                                    <input type="number" class="form-control input-lg" id="rejected_qty4" name="rejected_qty4" placeholder="-type-" value="{{ old('rejected_qty') }}">


                                    @if ($errors->has('rejected_qty'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('rejected_qty') }}</strong>
                            </span>
                                    @endif

                                </div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-footer">
                    <div class="form-group{{ $errors->has('rcvby') ? ' has-error' : '' }}">
                        <label for="rcvby" class="control-label">Received By:</label>
                        <input type="text" class="form-control input-lg" id="rcvby" name="rcvby" placeholder="Add Name"
                               value="{{ old('rcvby') }}">

                        @if ($errors->has('rcvby'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rcvby') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('chkby') ? ' has-error' : '' }}">
                        <label for="chkby" class="control-label">Checked By:</label>
                        <input type="text" class="form-control input-lg" id="chkby" name="chkby" placeholder="Add name"
                               value="{{ old('chkby') }}">

                        @if ($errors->has('chkby'))
                            <span class="help-block">
                                <strong>{{ $errors->first('chkby') }}</strong>
                            </span>
                        @endif

                    </div>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                </div>
            </div>
        </div>


    </form>
</div>

@endsection