@extends('layouts.app')
@section('content')
@section('pageTitle', 'New PurchaseOrder')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/prism.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection
    <div class="section-heading">
        <h1 class="page-title">Purchase Order:</h1>
    </div>
    <div class="row">


                <form onsubmit="return check(this)" class="form-auth-small" role="form" method="POST"
                      action="{{ url('purchaseOrders') }}" data-parsley-validate novalidate>
                    {{ csrf_field() }}
                    <div class="col-md-10">
                        <div class="panel-content">
                            <div class="form-group{{ $errors->has('pr') ? ' has-error' : '' }}">
                                <label for="pr" class="control-label">Product</label><br>
                                <select id='pr' class='chosen-select' name='pr' required>
                                    <option value=''>Select Product</option>
                                    @foreach($products as $product)
                                        <option value={{$product->id}}>{{$product->model}}</option>
                                    @endforeach
                                </select>
                            <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th></th>
                                <th>Product ID:</th>
                                <th>Price</th>
                                <th>Qty:</th>
                            </tr>
                            </thead>
                                <tbody>
                                <tr>
                                <td></td>
                                <td><p id="code"></p></td>
                                <td><p id="price"></p></td>
                                <td><input type="number" class="form-control input-lg" id="qty" name="qty" placeholder="QTY"
                                       min="0" data-parsley-type="number" value="{{ old('qty') }}"></td>
                                </tr>
                                </tbody>
                            </table>
                </div>
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
                    <label for="level_no" class="control-label sr-only-focusable">No. of Items Ordered</label>
                    <input readonly type="number" class="form-control input-lg" id="no_of_items" name="no_of_items"
                           min="0" data-parsley-type="number" value="{{ old('no_of_items') }}">

                    @if ($errors->has('no_of_items'))
                        <span class="help-block">
                                <strong>{{ $errors->first('no_of_items') }}</strong>
                            </span>
                    @endif
                </div>
                    <div class="form-group{{ $errors->has('net_cost') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label sr-only-focusable">Net Cost</label>
                        <input readonly type="number" class="form-control input-lg" id="net_cost" name="net_cost"
                               value="{{ old('net_cost') }}">

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
    <script type="text/javascript">
        $(document).ready(function() {


                var s=[];
                var pr_code = [];

                @foreach ($products as $product)

                    pr_code['{{$product->id}}'] = '{{$product->code}}';
                    s['{{$product->id}}'] = '{{$product->selling_price}}';

               // var p_p = p_p + document.getElementById('purchasing_price');
              //  document.getElementById('net_cost').value = p_p;

               // var o_q = o_q + document.getElementById('quantity');
               // document.getElementById('no_of_items').value = o_q;

                @endforeach


                $('#pr').on('change', function () {
                    var code = document.getElementById('code');
                    var price = document.getElementById('price');

                    price.innerHTML = s[$('#pr').val()];
                    //document.getElementById('price').value = s[$('#pr').val()];
                    code.innerHTML = pr_code[$('#pr').val()];
                })



            $(".add-row").click(function () {
                var r = "<tr><td><select id='pr' class='chosen-select' name='no[]' required>" +
                "   @foreach($products as $product)" +
                "           <option value={{$product->id}}>{{$product->model}}</option>" +
                "   @endforeach" +
                        "</select>" +
                        "</td>" +
                    "<td id='code' >" +
                    "<input readonly type='text' class='form-control' name='code[]' required" +
                    "                                   value=' '></td>" +

                    "<td id='price' >" +
                    "<input readonly type='text' class='form-control' name='price[]' required" +
                    "                                   value=' '></td>" +
                    "<td id='Qty'>" +
                    "<input type='text' class='form-control' name='qty[]' placeholder='QTY' required" +
                    "                                   value='{{ old('qty') }}'></td>" +

                    "<td><input type='checkbox' name='chk'></td></tr>";
                $("table tbody").append(r);
            });

            // Find and remove selected table rows
            $(".delete-row").click(function () {
                $("table tbody").find('input[name="chk"]').each(function () {
                    $(this).parents("tr").remove();

                });
            });
        });
    </script>
@endsection