@extends('layouts.app')
@section('pageTitle','Product Details')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Product Detail Form</h1>
    </div>
    <div class="row">
        <form onsubmit="return check(this)" class="form-auth-small" role="form" method="POST"
              action="{{ url('/productdetails') }}" data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group">
                        <label for="code" class="control-label">Product</label><br>
                        <select style="width: 40%;" id='product' class='chosen-select'
                                name='product' required>
                            <option value=''>Select Product</option>
                            @foreach($products as $product)
                                @if($product->name)
                                    <option value={{$product->id}}>{{$product->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('purchase_price') ? ' has-error' : '' }}">
                        <label for="purchase_price" class="control-label">Purchase Price</label>
                        <input type="text" class="form-control" name="purchase_price" required
                               id="purchase_price" value="{{ old('purchase_price') }}">
                        @if ($errors->has('purchase_price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('purchase_price') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="warranty_status" class="control-label">Warranty</label>
                        <input style="float:right" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Applicable" data-off="N/A"
                               name="warranty_status" value="1" type="checkbox">
                    </div>
                    <div class="form-group{{ $errors->has('warranty') ? ' has-error' : '' }}">
                        <label for="warranty" class="control-label">Warranty</label>
                        <input type="text" class="form-control" name="warranty"
                               id="warranty" value="{{ old('warranty') }}">
                        @if ($errors->has('warranty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warranty') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group">
                        <br>
                        <br>
                    </div>
                    <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
                        <label for="qty" class="control-label">Quantity</label>
                        <input type="text" class="form-control" name="qty" required
                               id="qty" value="{{ old('qty') }}">
                        @if ($errors->has('qty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('qty') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('warranty') ? ' has-error' : '' }}">
                        <label for="rem_qty" class="control-label">Remaining Quantity</label>
                        <input type="text" class="form-control" name="rem_qty"
                               id="rem_qty" value="{{ old('rem_qty') }}">
                        @if ($errors->has('rem_qty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rem_qty') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('warranty') ? ' has-error' : '' }}">
                        <label for="sold_qty" class="control-label">Sold Quantity</label>
                        <input type="text" class="form-control" name="sold_qty"
                               id="sold_qty" value="{{ old('sold_qty') }}">
                        @if ($errors->has('sold_qty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sold_qty') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button style="float:right" class="btn btn-primary" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</form>
</div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    {{--<script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>--}}
@endsection