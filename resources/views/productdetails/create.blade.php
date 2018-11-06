@extends('layouts.app')
@section('content')
@section('pageTitle','ProductDetails')
    <div class="section-heading">
        <h1 class="page-title">Product Detail Form</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">

                <div class="form-auth-small" role="form" method="POST" action="{{ url('/productdetail') }}">
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
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label  for="code" class="control-label">Code</label>
                        <input type="number" class="form-control input-lg" id="code" name="code"
                               value="{{ old('code') }}">

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="control-label ">Description</label>
                        <input type="text" class="form-control input-lg" id="description" name="description"
                               value="{{ old('name') }}">

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                        <label for="model" class="control-label ">Model</label>
                        <input type="text" class="form-control input-lg" id="model" name="model"
                               value="{{ old('model') }}">

                        @if ($errors->has('model'))
                            <span class="help-block">
                                <strong>{{ $errors->first('model') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                        <label for="color" class="control-label ">Color</label>
                        <input type="text" class="form-control input-lg" id="color" name="color"
                               value="{{ old('color') }}">

                        @if ($errors->has('color'))
                            <span class="help-block">
                                <strong>{{ $errors->first('color') }}</strong>
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
                    <br>
                    <div class="form-group{{ $errors->has('warranty') ? ' has-error' : '' }}">
                        <label for="warranty" class="control-label ">Warranty-Till</label>
                        <input type="number" class="form-control input-lg" id="warranty" name="warranty"
                               value="{{ old('warranty') }}">

                        @if ($errors->has('warranty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warranty') }}</strong>
                            </span>
                        @endif
                    </div>
                        <br>
                        <div class="form-group">
                            <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                   data-on="With Warranty" data-off="Without Warranty"
                                   name="Warranty" value="1" type="checkbox" id="warranty_status" >
                        </div>

                        <div class="form-group{{ $errors->has('min_qty') ? ' has-error' : '' }}">
                            <label for="min_qty" class="control-label">Minimum Quantity</label>
                            <input type="number" class="form-control input-lg" id="min_qty" name="min_qty"
                                   value="{{ old('min_qty') }}">

                            @if ($errors->has('min_qty'))
                                <span class="help-block">
                                <strong>{{ $errors->first('min_qty') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('max_qty') ? ' has-error' : '' }}">
                            <label for="max_qty" class="control-label ">Maximum Quantity</label>
                            <input type="number" class="form-control input-lg" id="max_qty" name="max_qty"
                                   value="{{ old('max_qty') }}">

                            @if ($errors->has('max_qty'))
                                <span class="help-block">
                                <strong>{{ $errors->first('max_qty') }}</strong>
                            </span>
                            @endif

                        </div>


                        <div class="form-group{{ $errors->has('purchase_price') ? ' has-error' : '' }}">
                            <label for="purchase_price" class="control-label ">Purchase Price</label>
                            <input type="number" class="form-control input-lg" id="purchase_price" name="purchase_price"
                                   value="{{ old('purchase_price') }}">

                            @if ($errors->has('purchase_price'))
                                <span class="help-block">
                                <strong>{{ $errors->first('purchase_price') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}">
                            <label for="selling_price" class="control-label ">Selling Price</label>
                            <input type="number" class="form-control input-lg" id="selling_price" name="selling_price"
                                   value="{{ old('selling_price') }}">

                            @if ($errors->has('selling_price'))
                                <span class="help-block">
                                <strong>{{ $errors->first('selling_price') }}</strong>
                            </span>
                            @endif

                        </div>
                        <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
                            <label for="discount" class="control-label">Discount</label>
                            <input type="number" class="form-control input-lg" id="discount" name="discount"
                                   value="{{ old('discount') }}">

                            @if ($errors->has('discount'))
                                <span class="help-block">
                                <strong>{{ $errors->first('discount') }}</strong>
                            </span>
                            @endif

                        </div>
                            <br>

                            <div class="form-group{{ $errors->has('discounted_price') ? ' has-error' : '' }}">
                                <label for="discounted_price" class="control-label">Discounted Price</label>
                                <input type="number" class="form-control input-lg" id="discounted_price" name="discounted_price"
                                       value="{{ old('discounted_price') }}">

                                @if ($errors->has('discounted_price'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('discounted_price') }}</strong>
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

                </form>
            </div>
        </div>
    </div>
</form>
</div>
@endsection