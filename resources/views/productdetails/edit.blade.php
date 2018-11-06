@extends('layouts.app')
@section('content')
@section('pageTitle','ProductDetails')
    <div class="section-heading">
        <h1 class="page-title">Product Detail Form</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="{{ url('/productdetail') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('product_id') ? ' has-error' : '' }}">
                        <label for="product_id" class="control-label sr-only">Product_ID</label>
                        <input type="number" class="form-control input-lg" id="product_id" name="product_id" placeholder="Product_id"
                               value="{{$productdetail->product_id}}">

                        @if ($errors->has('product_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('product_id') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
                        <label for="qty" class="control-label sr-only">Quantity</label>
                        <input type="number" class="form-control input-lg" id="qty" name="qty" placeholder="Qty"
                               value="{{$productdetail->qty}}">

                        @if ($errors->has('qty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('qty') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('sold') ? ' has-error' : '' }}">
                        <label for="sold" class="control-label sr-only">Sold</label>
                        <input type="number" class="form-control input-lg" id="sold" name="sold" placeholder="Sold"
                               value="{{$productdetail->sold}}">

                        @if ($errors->has('sold'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sold') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('remaining') ? ' has-error' : '' }}">
                        <label for="remaining" class="control-label sr-only">Remaining Quantity</label>
                        <input type="number" class="form-control input-lg" id="remaining" name="remaining" placeholder="Remaining"
                               value="{{$productdetail->remaining}}">

                        @if ($errors->has('remaining'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('dateadded') ? ' has-error' : '' }}">
                        <label for="dateadded" class="control-label sr-only">DateAdded</label>
                        <input type="number" class="form-control input-lg" id="dateadded" name="dateadded" placeholder="DateAdded"
                               value="{{$productdetail->dateadded}}">

                        @if ($errors->has('dateadded'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dateadded') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('purchaseprice') ? ' has-error' : '' }}">
                        <label for="purchaseprice" class="control-label sr-only">Purchase Price</label>
                        <input type="number" class="form-control input-lg" id="purchaseprice" name="purchaseprice" placeholder="PurchasePrice"
                               value="{{$productdetail->purchaseprice}}">

                        @if ($errors->has('purchaseprice'))
                            <span class="help-block">
                                <strong>{{ $errors->first('purchaseprice') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('sellingprice') ? ' has-error' : '' }}">
                        <label for="sellingprice" class="control-label sr-only">Selling Price</label>
                        <input type="number" class="form-control input-lg" id="sellingprice" name="sellingprice" placeholder="SellingPrice"
                               value="{{ $productdetail->sellingprice}}">

                        @if ($errors->has('sellingprice'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sellingprice') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('discountedprice') ? ' has-error' : '' }}">
                        <label for="discountedprice" class="control-label sr-only">Discounted Price</label>
                        <input type="number" class="form-control input-lg" id="discountedprice" name="discountedprice" placeholder="DiscountedPrice"
                               value="{{ $productdetail->discountedprice}}">

                        @if ($errors->has('discountedprice'))
                            <span class="help-block">
                                <strong>{{ $errors->first('discountedprice') }}</strong>
                            </span>
                        @endif

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection