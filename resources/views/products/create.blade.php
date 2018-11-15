@extends('layouts.app')
@section('pageTitle', 'Product')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection
@section('content')
<div class="section-heading">
    <h1 class="page-title">Product Form</h1>
</div>
<div class="row">

    <form class="form-auth-small" role="form" method="POST" action="{{ url('/products') }}"
          data-parsley-validate novalidate>
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">
                <div class="form-group">
                    <label for="code" class="control-label">Product Category</label><br>
                    <select id='pr' class='chosen-select' name='type' required>
                        <option value=''>Select Category</option>
                        @foreach($productCategories as $productcategory)
                            @if($productcategory->name)
                                <option value={{$productcategory->id}}>{{$productcategory->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label ">Name</label>
                    <input type="text" class="form-control " id="name" name="name"
                           value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                    <label for="model" class="control-label">Model</label>
                    <input type="text" class="form-control" name="model" required
                           id="model" value="{{ old('model') }}">
                    @if ($errors->has('model'))
                        <span class="help-block">
                                <strong>{{ $errors->first('model') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="control-label">Description</label>
                    <input type="text" class="form-control" name="description"
                           id="description" value="{{ old('description') }}">
                    @if ($errors->has('description'))
                        <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                    <label for="color" class="control-label">Color</label>
                    <input type="text" class="form-control" name="color" required
                           id="color" value="{{ old('color') }}">
                    @if ($errors->has('color'))
                        <span class="help-block">
                                <strong>{{ $errors->first('color') }}</strong>
                            </span>
                    @endif
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">
                <br>
                <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}">
                    <label for="selling_price" class="control-label">Selling Price</label>
                    <input type="text" class="form-control" name="selling_price" required
                           id="selling_price" value="{{ old('') }}">
                    @if ($errors->has('selling_price'))
                        <span class="help-block">
                                <strong>{{ $errors->first('selling_price') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('min_qty') ? ' has-error' : '' }}">
                    <label for="min_qty" class="control-label">Minimum Quantity</label>
                    <input type="text" class="form-control" name="min_qty" required
                           id="min_qty" value="{{ old('min_qty') }}">
                    @if ($errors->has('min_qty'))
                        <span class="help-block">
                                <strong>{{ $errors->first('min_qty') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('max_qty') ? ' has-error' : '' }}">
                    <label for="max_qty" class="control-label">Maximum Quantity</label>
                    <input type="text" class="form-control" name="max_qty" required
                           id="max_qty" value="{{ old('max_qty') }}">
                    @if ($errors->has('max_qty'))
                        <span class="help-block">
                                <strong>{{ $errors->first('max_qty') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="discount" class="control-label">Discount</label>
                    <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                           data-on="Discount" data-off="No Discount"
                           name="discount" value="1" type="checkbox">
                </div>
                <div class="form-group{{ $errors->has('discounted_price') ? ' has-error' : '' }}">
                    <label for="discounted_price" class="control-label">Discounted Price</label>
                    <input type="text" class="form-control" name="discounted_price"
                           id="discounted_price" value="{{ old('discounted_price') }}">
                    @if ($errors->has('discounted_price'))
                        <span class="help-block">
                                <strong>{{ $errors->first('discounted_price') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group">
                    <button style="float: right" class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
@endsection
