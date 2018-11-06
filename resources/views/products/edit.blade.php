@extends('layouts.app')
@section('content')
@section('pageTitle','')
    <div class="section-heading">
        <h1 class="page-title">Product Form</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="/products/{{{$product->id}}}">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('grn_id') ? ' has-error' : '' }}">
                        <label for="grn_id" class="control-label sr-only">grn_id</label>
                        <input type="number" class="form-control input-lg" id="grn_id" name="grn_id" placeholder="GRN_ID"
                               value="{$product->grn_id}}">

                        @if ($errors->has('grn_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('grn_id') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="control-label sr-only">Code</label>
                        <input type="number" class="form-control input-lg" id="code" name="code" placeholder="Code"
                               value="{{$product->code}}">

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
                        <label for="discount" class="control-label sr-only">discount</label>
                        <input type="number" class="form-control input-lg" id="discount" name="discount" placeholder="Discount"
                               value="{{$product->discount}}">

                        @if ($errors->has('discount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('discount') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label sr-only">Name</label>
                        <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Name"
                               value="{{$product->name}}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="control-label sr-only">Description</label>
                        <input type="text" class="form-control input-lg" id="description" name="description" placeholder="Description"
                               value="{{$product->description}}">

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                        <label for="model" class="control-label sr-only">Model</label>
                        <input type="number" class="form-control input-lg" id="model" name="model" placeholder="Model"
                               value="{{$product->model}}">

                        @if ($errors->has('model'))
                            <span class="help-block">
                                <strong>{{ $errors->first('model') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                        <label for="color" class="control-label sr-only">Color</label>
                        <input type="text" class="form-control input-lg" id="color" name="color" placeholder="Color"
                               value="{{$product->color}}">

                        @if ($errors->has('color'))
                            <span class="help-block">
                                <strong>{{ $errors->first('color') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('warranty') ? ' has-error' : '' }}">
                        <label for="warranty" class="control-label sr-only">Warranty</label>
                        <input type="number" class="form-control input-lg" id="warranty" name="warranty" placeholder="Warranty"
                               value="{{$product->warranty}}">

                        @if ($errors->has('warranty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warranty') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group input-group">
                        <label class="fancy-checkbox">
                            <input id="warranty" name="warranty" type="checkbox"><span>Warranty Status</span>
                        </label>
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                    </div>
                    <div class="form-group{{ $errors->has('minqty') ? ' has-error' : '' }}">
                        <label for="minqty" class="control-label sr-only">Minimum Quantity</label>
                        <input type="number" class="form-control input-lg" id="minqty" name="minqty" placeholder="MinQty"
                               value="{{$product->minqty}}">

                        @if ($errors->has('minqty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('minqty') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('maxqty') ? ' has-error' : '' }}">
                        <label for="maxqty" class="control-label sr-only">Maximum Quantity</label>
                        <input type="number" class="form-control input-lg" id="maxqty" name="maxqty" placeholder="MaxQty"
                               value="{{$product->maxqty}}">

                        @if ($errors->has('maxqty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('maxqty') }}</strong>
                            </span>
                        @endif

                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection