@extends('layouts.app')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection
@section('content')
@section('pageTitle', 'Installments')
<div style="border: #0b5b97 2px solid" class="section-heading">
    <h1 class="page-title">Installments Form</h1>
</div>
<div class="row">
    <form class="form-auth-small" role="form" method="POST" action="{{ url('/installments') }}" data-parsley-validate novalidate>
        {{ csrf_field() }}
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="panel-content">
                <div class="form-group">
                    <label for="no" class="control-label">Plans</label>
                    <select id='plan' class='chosen-select' name='plan'>
                        <option value=''>Select Plan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount" class="control-label">Product Price</label>
                    <input type="text" class="form-control" name="amount" readonly
                           id="amount" required>
                </div>
                <div class="form-group{{ $errors->has('additional_amount') ? ' has-error' : '' }}">
                    <label for="additional_amount" class="control-label">Additional Amount</label>
                    <input type="text" class="form-control" name="additional_amount" required
                           id="additional_amount" data-parsley-length="[2,5]">
                    @if ($errors->has('additional_amount'))
                        <span class="help-block">
                                <strong>{{ $errors->first('additional_amount') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="down_payment" class="control-label">Down/Advance Payment</label>
                    <input type="text" class="form-control" name="down_payment" required
                           id="down_payment" data-parsley-length="[3,5]">
                </div>
                <div class="form-group">
                    <label for="total_amount" class="control-label">Due Amount</label>
                    <input type="text" class="form-control" name="total_amount" required
                           id="total_amount" readonly>
                </div>
                <div class="form-group">
                    <label for="total_amount" class="control-label">Per Month Installment</label>
                    <input type="text" class="form-control" name="per_month" required
                           id="per_month" value="0" readonly>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">

                <div class="form-group">
                    <label for="customer_no" class="control-label">Customer</label>
                    <select id='customer_no' class='chosen-select' name='customer_no' required>
                        <option value='1'>Select Customer</option>
                        {{--@foreach($customers as $customer)--}}
                        {{--<option value={{$customer->id}}>{{$customer->name}}</option>--}}
                        {{--@endforeach--}}
                    </select>
                </div>
                <div class="form-group{{ $errors->has('total_months') ? ' has-error' : '' }}">
                    <label for="total_months" class="control-label">Total Months</label>
                    <input type="text" class="form-control" name="total_months"
                           id="total_months" required data-parsley-min="3"
                           data-parsley-max="96">
                    @if ($errors->has('total_months'))
                        <span class="help-block">
                                <strong>{{ $errors->first('total_months') }}</strong>
                            </span>
                    @endif
                </div>
                <label for="start_date" class="control-label">Start Date</label>
                <div class="form-group input-group">
                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                           data-date-format="yyyy-mm-dd" name="start_date" required>
                    <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                </div>

                <div class="form-group">
                    <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                           data-on="Approved" data-off="Un-Approved"
                           name="approved_status" value="1" type="checkbox">
                    <button type="submit" class="btn btn-info">Send</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5">
            <div class="panel-content">
                <div class="form-group{{ $errors->has('pr_no') ? ' has-error' : '' }}">
                    <label for="pr_no" class="control-label">Product</label>
                    <select id='pr_no' class='chosen-select' name='pr_no' required>
                        <option value=''>Select Product</option>
                        @foreach($products as $product)
                            <option value={{$product->id}}>{{$product->model}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="product_details">
                    Code:<p id="code"></p>
                    <br>Description:<p id="description"></p>
                    <br>Price:<p id="price"></p>
                </div>
            </div>
        </div>
    </form>
</div>




@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            // document.getElementById('additional_amount').onblur = function () {
            //     var downP = parseInt(document.getElementById('down_payment').value);
            //     var addP = parseInt(document.getElementById('additional_amount').value);
            //     var productA = parseInt(document.getElementById('amount').value);
            //     var totalA = document.getElementById('total_amount');
            //     totalA.value = productA - downP + addP;
            // }

            document.getElementById('down_payment').onblur = function () {
                var downP = document.getElementById('down_payment').value;
                var addP = document.getElementById('additional_amount').value;
                var productA = document.getElementById('amount').value;
                var per_month = document.getElementById('per_month');
                var months = parseInt(document.getElementById('total_months').value);

                var totalA = document.getElementById('total_amount');
                amount = +productA - +downP + +addP;
                totalA.value = amount;
                per_month.value = (amount / months).toFixed(2);
            }

            document.getElementById('total_months').onblur = function () {
                var totalA = document.getElementById('total_amount').value;
                var months = parseInt(document.getElementById('total_months').value);
                var per_month = document.getElementById('per_month');

                per_month.value = (totalA / months).toFixed(2);
            }

            var productD = [];
            var productP = [];
            var productC = [];
            @foreach ($products as $product)
                productD['{{$product->id}}'] = '{{$product->description}}';
            productP['{{$product->id}}'] = '{{$product->selling_price}}';
            productC['{{$product->id}}'] = '{{$product->code}}';
            @endforeach

            $('#pr_no').on('change', function () {
                var code = document.getElementById('code');
                var description = document.getElementById('description');
                var price = document.getElementById('price');

                price.innerHTML = productP[$('#pr_no').val()];
                document.getElementById('amount').value = productP[$('#pr_no').val()];
                description.innerHTML = productD[$('#pr_no').val()];
                code.innerHTML = productC[$('#pr_no').val()];
            })
        });

    </script>
@endsection