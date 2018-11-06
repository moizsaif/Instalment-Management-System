@extends('layouts.app')
@section('content')
@section('pageTitle', 'Product')
<div class="section-heading">
    <h1 class="page-title">Product Form</h1>
</div>
<div class="row">

    <form class="form-auth-small" role="form" method="POST" action="{{ url('/products') }}">
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">

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
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label ">Name</label>
                    <input type="text" class="form-control input-lg" id="name" name="name"
                           value="{{ old('name') }}">

                    @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
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
            </div>
        </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="panel-content">


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

                    <br>
                    <div class="form-group">
                        <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="With Warranty" data-off="Without Warranty"
                               name="Warranty" value="1" type="checkbox" id="warranty_status" >
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
                    <br>


                <div>
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                </div>
                </div>
                        </div>
                    </div>

    </form>
</div>

@endsection