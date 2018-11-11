@extends('layouts.app')
@section('page-style')
@endsection
@section('content')
@section('pageTitle', 'Add Product Category')
<div class="section-heading">
    <h1 class="page-title">Product Category Form</h1>
</div>
<div class="row">
    <div class="col-lg-4 col-md-5 col-sm-6">
        <div class="panel-content">

            <form class="form-auth-small" role="form" method="POST" action="{{ url('/productCategories') }}" data-parsley-validate novalidate>
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" class="form-control" name="name"
                           value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif
                </div>
                <div>
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('page-script')
@endsection
