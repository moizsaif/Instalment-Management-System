@extends('layouts.app')
@section('content')
/**
 * Created by PhpStorm.
 * User: Moiz
 * Date: 10/21/2018
 * Time: 6:05 AM
 */


    <div class="section-heading">
        <h1 class="page-title">Purchase Order:</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">

                <form class="form-auth-small" role="form" method="POST" action="{{ url('/purchaseorder') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('no') ? ' has-error' : '' }}">
                        <label for="code" class="control-label sr-only">NO</label>
                        <input type="text" class="form-control input-lg" id="no" name="no" placeholder="No"
                               value="{{ old('no') }}">

                        @if ($errors->has('no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                        <label for="description" class="control-label sr-only">Amount</label>
                        <input type="number" class="form-control input-lg" id="amount" name="amount" placeholder="Amount"
                               value="{{ old('amount') }}">

                        @if ($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label sr-only">Quantity:</label>
                        <input type="number" class="form-control input-lg" id="quantity" name="quantity" placeholder="Quantity"
                               value="{{ old('quantity') }}">

                        @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif

                    </div>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
                </form>
            </div>
        </div>
    </div>
@endsection