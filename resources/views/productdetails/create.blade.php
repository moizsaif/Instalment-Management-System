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
                        <label for="product_id" class="control-label">Product_ID</label>
                        <input type="number" class="form-control input-lg" id="product_id" name="product_id"
                               value="{{ old('product_id') }}">

                        @if ($errors->has('product_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('product_id') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
                        <label for="qty" class="control-label">Quantity</label>
                        <input type="number" class="form-control input-lg" id="qty" name="qty"
                               value="{{ old('qty') }}">

                        @if ($errors->has('qty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('qty') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('sold') ? ' has-error' : '' }}">
                        <label for="sold" class="control-label ">Sold</label>
                        <input type="number" class="form-control input-lg" id="sold" name="sold"
                               value="{{ old('sold') }}">

                        @if ($errors->has('sold'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sold') }}</strong>
                            </span>
                        @endif
                        <br>

                        <div class="form-group{{ $errors->has('remaining') ? ' has-error' : '' }}">
                            <label for="remaining" class="control-label">Remaining Quantity</label>
                            <input type="number" class="form-control input-lg" id="remaining" name="remaining"
                                   value="{{ old('name') }}">

                            @if ($errors->has('remaining'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('purchaseprice') ? ' has-error' : '' }}">
                            <label for="purchaseprice" class="control-label ">Purchase Price</label>
                            <input type="number" class="form-control input-lg" id="purchaseprice" name="purchaseprice"
                                   value="{{ old('purchaseprice') }}">

                            @if ($errors->has('purchaseprice'))
                                <span class="help-block">
                                <strong>{{ $errors->first('purchaseprice') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('sellingprice') ? ' has-error' : '' }}">
                            <label for="sellingprice" class="control-label ">Selling Price</label>
                            <input type="number" class="form-control input-lg" id="sellingprice" name="sellingprice"
                                   value="{{ old('sellingprice') }}">

                            @if ($errors->has('sellingprice'))
                                <span class="help-block">
                                <strong>{{ $errors->first('sellingprice') }}</strong>
                            </span>
                            @endif
                            <br>

                            <div class="form-group{{ $errors->has('discountedprice') ? ' has-error' : '' }}">
                                <label for="discountedprice" class="control-label">Discounted Price</label>
                                <input type="number" class="form-control input-lg" id="discountedprice" name="discountedprice"
                                       value="{{ old('discountedprice') }}">

                                @if ($errors->has('discountedprice'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('discountedprice') }}</strong>
                            </span>
                            </div>
                        </div>
                    @endif
                        <br>
                        <div>
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                        </div>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection