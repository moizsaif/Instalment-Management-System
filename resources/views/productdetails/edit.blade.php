@extends('layouts.app')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection
@section('content')
@section('pageTitle','ProductDetails')
<div class="section-heading">
    <h1 class="page-title">Product Form</h1>
</div>
<div class="row">
    <form onsubmit="return check(this)" class="form-auth-small" role="form" method="POST"
          action="/productdetails/{{$ProductDetail->id}}" data-parsley-validate novalidate>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="panel-content">
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="control-label">Description</label>
                    <input type="text" class="form-control" name="description" required
                           id="description" value="{{ $ProductDetail->description }}">
                    @if ($errors->has('description'))
                        <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                    <label for="model" class="control-label">Model</label>
                    <input type="text" class="form-control" name="model" required
                           id="model" value="{{ $ProductDetail->model }}">
                    @if ($errors->has('model'))
                        <span class="help-block">
                                <strong>{{ $errors->first('model') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                    <label for="color" class="control-label">Color</label>
                    <input type="text" class="form-control" name="color" required
                           id="color" value="{{ $ProductDetail->color }}">
                    @if ($errors->has('color'))
                        <span class="help-block">
                                <strong>{{ $errors->first('color') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="discount" class="control-label">Discount</label>
                    <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                           data-on="Discount" data-off="No Discount"
                           name="discount" value="1" type="checkbox">
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="panel-content">
                <div class="form-group{{ $errors->has('warranty') ? ' has-error' : '' }}">
                    <label for="warranty" class="control-label">Warranty</label>
                    <input type="text" class="form-control" name="warranty" required
                           id="warranty" value="{{ $ProductDetail->warranty }}">
                    @if ($errors->has('warranty'))
                        <span class="help-block">
                                <strong>{{ $errors->first('warranty') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}">
                    <label for="selling_price" class="control-label">Selling Price</label>
                    <input type="text" class="form-control" name="selling_price" required
                           id="selling_price" value="{{ $ProductDetail->selling_price }}">
                    @if ($errors->has('selling_price'))
                        <span class="help-block">
                                <strong>{{ $errors->first('selling_price') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('discounted_price') ? ' has-error' : '' }}">
                    <label for="discounted_price" class="control-label">Discounted Price</label>
                    <input type="text" class="form-control" name="discounted_price" required
                           id="discounted_price" value="{{ $ProductDetail->discounted_price }}">
                    @if ($errors->has('discounted_price'))
                        <span class="help-block">
                                <strong>{{ $errors->first('discounted_price') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="warranty_status" class="control-label">Warranty</label>
                    <input style="float:right" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                           data-on="Applicable" data-off="N/A"
                           name="warranty_status" value="1" type="checkbox">
                    <button style="float:right" class="btn btn-primary" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
@endsection