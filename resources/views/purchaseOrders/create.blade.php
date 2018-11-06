@extends('layouts.app')
@section('content')
@section('pageTitle', 'New PurchaseOrder')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/prism.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
    <style>
        #pr_id{
            width: 10%;
        }
        #Price{
            width: 15%;
        }
        #cost{
            width: 15%;
        }

        #Qty{
            width: 15%;
        }

    </style>
@endsection
    <div class="section-heading">
        <h1 class="page-title">Purchase Order:</h1>
    </div>
    <div class="row">


                <form class="form-auth-small" role="form" method="POST" action="{{ url('purchaseOrders') }}">
                    {{ csrf_field() }}
                    <div class="col-md-10">
                        <div class="panel-content">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Product ID:</th>
                                <th>Price</th>
                                <th>Cost:</th>
                                <th>Qty:</th>
                            </tr>
                            </thead>
                                <tbody>
                                <tr>
                    <div class="form-group{{ $errors->has('pr_id') ? ' has-error' : '' }}">
                        <td><input type="text" class="form-control input-lg" id="no" name="no" placeholder="add product code"
                                   value="{{ old('pr_id') }}"></td>

                        @if ($errors->has('pr_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pr_id') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">

                        <td><input type="number" class="form-control input-lg" id="price" name="price" placeholder="Amount"
                               value="{{ old('price') }}"></td>

                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('purchasing_price') ? ' has-error' : '' }}">

                        <td><input type="number" class="form-control input-lg" id="purchasing_price" name="purchasing_price" placeholder="Cost"
                               value="{{ old('purchasing_price') }}"></td>

                        @if ($errors->has('purchasing_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('purchasing_price') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">

                        <td><input type="number" class="form-control input-lg" id="quantity" name="quantity" placeholder="QTY"
                               value="{{ old('quantity') }}"></td>

                        @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif

                    </div>
                                </tr>
                                </tbody>
                            </table>
                </div>
                        <div class="col-lg-9 col-md-11 col-sm-12">
                            <div class="panel-content">
                                <button type="button" id="add-row" class="add-row btn btn-success">Add Row</button>
                                <button type="button" id="delete-row" class="delete-row btn btn-danger">Delete Row</button>

                            </div>
                        </div>
        </div>
        <div class="col-md-10">
            <div class="panel-footer">
                <div class="form-group{{ $errors->has('no_of_items') ? ' has-error' : '' }}">
                    <label for="level_no" class="control-label sr-only-focusable">No. of Items Orders</label>
                    <input type="number" class="form-control input-lg" id="no_of_items" name="no_of_items" placeholder=""
                           value="{{ old('') }}">

                    @if ($errors->has('no_of_items'))
                        <span class="help-block">
                                <strong>{{ $errors->first('no_of_items') }}</strong>
                            </span>
                    @endif
                </div>
                    <div class="form-group{{ $errors->has('net_cost') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label sr-only-focusable">Net Cost</label>
                        <input type="number" class="form-control input-lg" id="net_cost" name="net_cost" placeholder=""
                               value="{{ old('') }}">

                        @if ($errors->has('net_cost'))
                            <span class="help-block">
                                <strong>{{ $errors->first('net_cost') }}</strong>
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
        </div>
    </div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>
    <script>


        $(".add-row").click(function(){
            var r = "<tr>" +
                "<td id='pr_id'>" +
                "<input type='text' class='form-control' name='pr_id[]' placeholder='type' required " +
                "                                   value='{{ old('pr_id') }}'></td>" +
                "<td id='Price'>" +
                "<input type='text' class='form-control' name='price[]' placeholder='type' required" +
                "                                   value='{{ old('price') }}'></td>" +
                "<td id='cost'>" +
                "<input type='text' class='form-control' name='cost[]' placeholder='type' required" +
                "                                   value='{{ old('cost') }}'></td>" +
                "<td id='Qty'>" +
                "<input type='text' class='form-control' name='Qty[]' placeholder='type' required" +
                "                                   value='{{ old('qty') }}'></td>" +

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