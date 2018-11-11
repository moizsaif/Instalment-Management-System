@extends('layouts.app')
@section('content')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
@endsection

@section('pageTitle', 'Product')

<div class="section-heading">
    <h1 class="page-title">Product Form</h1>
</div>
<div class="row">

    <form class="form-auth-small" role="form" method="POST" action="{{ url('/products') }}"
          data-parsley-validate novalidate>
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">
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
                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                    <label for="code" class="control-label">Code</label>
                    <input type="text" class="form-control " id="code" name="code"
                           value="{{ old('code') }}" data-parsley-length="[6,9]">

                    @if ($errors->has('code'))
                        <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
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
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">
                <div class="form-group">
                    <label for="code" class="control-label">Product Category</label>
                    <select id='pr' class='chosen-select' name='type' required>
                        <option value=''>Select Category</option>
                        @foreach($productCategories as $productcategory)
                            @if($productcategory->name)
                                <option value={{$productcategory->id}}>{{$productcategory->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
@endsection
