@extends('layouts.app')
@section('content')
@section('page-style')
        <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
        @endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    {{--<script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>--}}
    @endsection

@section('pageTitle', 'Product')

<div class="section-heading">
    <h1 class="page-title">Product Form</h1>
</div>
<div class="row">

    <form class="form-auth-small" role="form" method="POST" action="{{ url('/products') }}">
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">
                <select id='pr' class='chosen-select' name='type' required>
                    <option value=''>Select Category</option>
                    @foreach($productCategories as $productcategory)
                        @if($productcategory->name)
                            <option value={{$productcategory->id}}>{{$productcategory->name}}</option>
                        @endif
                    @endforeach

                </select>
                <br/>
                <br/>
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
                <div class="form-group{{ $errors->has('sold') ? ' has-error' : '' }}">
                    <label for="sold" class="control-label ">Sold</label>
                    <input type="number" class="form-control input-lg" id="sold" name="sold"
                           value="{{ old('sold') }}">

                    @if ($errors->has('sold'))
                        <span class="help-block">
                                <strong>{{ $errors->first('sold') }}</strong>
                            </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('remaining') ? ' has-error' : '' }}">
                    <label for="remaining" class="control-label">Remaining Quantity</label>
                    <input type="number" class="form-control input-lg" id="remaining" name="remaining"
                           value="{{ old('name') }}">

                    @if ($errors->has('remaining'))
                        <span class="help-block">
                                <strong>{{ $errors->first('remaining') }}</strong>
                            </span>
                    @endif

                </div>
                <div>
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                </div>
                        </div>
                    </div>

    </form>
</div>

@endsection