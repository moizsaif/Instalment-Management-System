@extends('layouts.app')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <style>
        .input {
            width: 75%;
        }

        .acc {
            width: 20%;
            display: inline-block;
        }
    </style>
@endsection
@section('pageTitle', 'New Account')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Accounts Form</h1>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="{{ url('/accounts') }}" data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-9 col-md-10 col-sm-12">
                <div class="panel-content">
                    <div class="form-group{{ $errors->has('level_no') ? ' has-error' : '' }}">
                        <label for="level_no" class="control-label">Level Number</label>
                        <input style="width: 10%;" type="text" class="form-control" name="level_no"
                               value="1" id="level" data-parsley-min="1" data-parsley-max="4">

                        @if ($errors->has('level_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('level_no') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <select id='s1' class='chosen-select acc' name='l1'>
                            <option value=''>Level 1</option>
                            @foreach($accounts as $account)
                                @if($account->level_no==1)
                                    <option value={{$account->code}}>{{$account->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <select id='s2' class='chosen-select acc' name='l2'>
                            <option value=''>Level 2</option>
                            @foreach($accounts as $account)
                                @if($account->level_no==2)
                                    <option value={{$account->code}}>{{$account->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <select id='s3' class='chosen-select acc' name='l3'>
                            <option value=''>Level 3</option>
                            @foreach($accounts as $account)
                                @if($account->level_no==3)
                                    <option value={{$account->code}}>{{$account->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <label for="code" class="control-label">Code
                        <div class="form-group">
                            <input type="text" class="input form-control" name="code" id="code"
                                   value="{{ old('code') }}" required data-parsley-length="[2,5]">
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="panel-content">
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
                        <div class="form-group">
                            <label>
                                <input data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                       data-on="Allowed" data-off="Not Allowed"
                                       name="allow_transac" value="1" type="checkbox">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="panel-content">
                        <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                            <label for="alias" class="control-label">Alias</label>
                            <input type="text" class="form-control" name="alias"
                                   value="{{ old('alias') }}">
                            @if ($errors->has('alias'))
                                <span class="help-block">
                                <strong>{{ $errors->first('alias') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>
    </div>
@endsection
@section('page-script')
    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script>
        $(document).ready(function () {
            var s1 = document.getElementById('s1');
            var s2 = document.getElementById('s2');
            var s3 = document.getElementById('s3');

            $("#s1").chosen("destroy");
            s1.style.display = 'none';
            $("#s2").chosen("destroy");
            s2.style.display = 'none';
            $("#s3").chosen("destroy");
            s3.style.display = 'none';

            document.getElementById('level').onblur = function () {
                var level = document.getElementById('level').value;
                if (level === "4") {
                    $("#s1").chosen("destroy");
                    s1.style.display = 'none';
                    $("#s2").chosen("destroy");
                    s2.style.display = 'none';
                    // s2.removeAttr("required");

                    s3.style.display = '';
                    $('#s3').chosen();
                    s3.setAttribute("required");
                } else {
                    if (level === "3") {
                        $("#s1").chosen("destroy");
                        s1.style.display = 'none';
                        $("#s3").chosen("destroy");
                        s3.style.display = 'none';

                        s2.style.display = '';
                        $('#s2').chosen();
                        s2.setAttribute("required");
                    }
                    else {
                        if (level === "2") {
                            $("#s2").chosen("destroy");
                            s2.style.display = 'none';
                            $("#s3").chosen("destroy");
                            s3.style.display = 'none';

                            s1.style.display = '';
                            $('#s1').chosen();
                            s1.setAttribute("required");
                        }
                        else {
                            $("#s1").chosen("destroy");
                            s1.style.display = 'none';
                            $("#s2").chosen("destroy");
                            s2.style.display = 'none';
                            $("#s3").chosen("destroy");
                            s3.style.display = 'none';
                        }
                    }
                }
            }
        });
    </script>
@endsection