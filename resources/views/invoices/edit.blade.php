@extends('layouts.app')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection
@section('content')
@section('pageTitle', 'Invoices')
<div style="border: #B22222 2px solid" class="section-heading">
    <h1 class="page-title"> Invoice Form</h1>
</div>
<div class="row">
    <form class="form-auth-small" role="form" method="POST" action="{{ url('/invoices') }}" data-parsley-validatevalidate>
        {{ csrf_field() }}
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="panel-content">

                <div class="form-group">
                    <label for="date" class="control-label">Inv# Date</label>
                    <input type="date" class="form-control" name="date" required
                           id="date" data-parsley-length="[3,20]"
                           value="{{ old('date') }}">
                </div>

                <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                    <label for= class="control-label">Invoice#</label>
                    <input type="number" class="form-control" name="no" required
                           id="no"  min="0" data-parsley-length="[2,10]"
                           value="{{ old('no') }}">

                    @if ($errors->has('no'))
                        <span class="help-block">
                                <strong>{{ $errors->first('no') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('pr') ? ' has-error' : '' }}">
                    <label for="pr" class="control-label">Product</label><br>
                    <select id='pr' class='chosen-select' name='pr' required>
                        <option value=''>Select Product</option>
                        @foreach($products as $product)
                            <option value={{$product->id}}>{{$product->model}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="product_details">
                    Code:<p id="code"></p>
                    Description:<p id="description"></p>
                    Price:<p id="price"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="panel-content">

                <div class="form-group">
                    <label for="item_code" class="control-label">Catalogue</label>
                    <input readonly type="alphanum" class="form-control" name="item_code" required
                           id="item_code"
                           value="{{ old('item_code') }}">
                </div>
                <div class="form-group">
                    <label for="qty" class="control-label">Qty</label>
                    <input type="number" class="form-control" name="qty" required
                           id="qty" min="0"  data-parsley-length="[0,100]"
                           value="{{ old('qty') }}">
                </div>

                <div class="form-group">
                    <label for="total_amount" class="control-label">Total Amount</label>
                    <input readonly type="number" class="form-control" name="total_amount" required
                           id="total_amount"  min="0"   data-parsley-length="[1,20]"
                           value="{{ old('total_amount') }}">
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <div class="panel-content">
                <button type="button" id="adds" class="add-row btn btn-success">Add Row</button>
                <button type="button" id="deletes" class="delete-row btn btn-danger">Delete Row</button>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Catalogue</th>
                        <th>Total Amount</th>
                        <th>QTY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    </tbody>
                </table>
            </div>
            <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>

        </div>
    </form>
</div>


@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>
    <script type="text/javascript">



        $(document).ready(function(){

            window.onload = function() {
                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
                var date = new Date();

                document.getElementById('date').innerHTML = months[ date.getDate()+ date.getMonth()] + date.getFullYear();
            };

            var productD = [];
            var productP = [];
            var productC = [];
            @foreach ($products as $product)
                productD['{{$product->id}}'] = '{{$product->description}}';
            productP['{{$product->id}}'] = '{{$product->selling_price}}';
            productC['{{$product->id}}'] = '{{$product->code}}';
            @endforeach

            $('#pr').on('change', function () {
                var code = document.getElementById('code');
                var description = document.getElementById('description');
                var price = document.getElementById('price');

                price.innerHTML = productP[$('#pr').val()];
                document.getElementById('total_amount').value = productP[$('#pr').val()];
                description.innerHTML = productD[$('#pr').val()];
                code.innerHTML = productC[$('#pr').val()];
                document.getElementById('item_code').value = productC[$('#pr').val()];
            });

            $('#adds').click(function () {
                var r = "<tr><td><select id='pr' class='chosen-select' name='no[]' required>" +
                    "   @foreach($products as $product)" +
                    "           <option value={{$product->id}}>{{$product->model}}</option>" +
                    "   @endforeach" +
                    "</select>" +
                    "</td>" +
                    "<td id='item_code' >" +
                    "<input  type='text' class='form-control' name='item_code[]'   placeholder='ADD' required" +
                    "                                   value='{{ old('item_code') }} '></td>" +
                    "<td id='total_amount' >" +
                    "<input  type='text' class='form-control' name='total_amount[]' placeholder='ADD'  required" +
                    "                                   value='{{ old('total_amount') }} '></td>" +
                    "<td id='Qty'>" +
                    "<input type='text' class='form-control' name='qty[]' placeholder='ADD'  required" +
                    "                                   value='{{ old('qty') }}'></td>" +

                    "<td><input type='checkbox' name='chk'></td></tr>";
                $("table tbody").append(r);
            });

            // Find and remove selected table rows
            $('#deletes').click( function () {
                $("table tbody").find('input[name="chk"]').each(function () {
                    $(this).parents("tr").remove();

                });
            });
        });

    </script>
@endsection