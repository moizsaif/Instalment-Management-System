@extends('layouts.app')
@section('page-style')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/prism.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/toggle.css') }}">

    <style>
        #name{
            width: 100%;
        }
        #contact_no{
            width: 100%;
        }
        #cnic{
            width: 100%;
        }
        #email{
            width: 100%;
        }
        #address{
            width: 100%;
        }
        #iban{
            width: 100%;
        }

    </style>
@endsection
@section('pageTitle', 'Add Vendor')
@section('content')
    <div class="section-heading" xmlns: xmlns:>
        <h2 class="page-title">Add New Vendor</h2>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST"
              action="{{ url('/vendors') }}" data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="panel-heaader">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" name="name"
                               id="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('contact_no') ? ' has-error' : '' }}">
                        <label for="contact_no" class="control-label">Contact Number</label>
                        <input type="tel" pattern="[0-9]{11}" class="form-control" name="contact_no" placeholder="03XX-XXXXXXX"
                               value="{{ old ('contact_no') }}"><br>

                        @if ($errors->has('contact_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact_no') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('cnic') ? ' has-error' : '' }}">
                        <label for="cnic" class="control-label">CNIC No</label>
                        <input type="number" pattern="[0-9]{5}[0-9]{7}[0-9]{1}" class="form-control" name="cnic" placeholder="35202-XXXXXXX-X"
                               value="{{ old ('cnic') }}"><br>

                        @if ($errors->has('cnic'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cnic') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="email" placeholder="abc@xyz.com"
                               value="{{ old ('email') }}"><br>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="control-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="101 XYZ Street 14 plaza abc, Lahore, Pk"
                               value="{{ old ('address') }}"><br>

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('iban') ? ' has-error' : '' }}">
                        <label for="iban" class="control-label">IBAN#</label>
                        <input type="text" pattern="[A-Z]{2}\d{2} [A-Z]{4} ?\d{4} ?\d{4} ?\d{4} ?[\d]{0,4}" class="form-control" name="iban" placeholder="PK36 SCBL 00XXXXXXXXXXXXXX"
                               value="{{ old ('iban') }}"><br>

                        @if ($errors->has('iban'))
                            <span class="help-block">
                                <strong>{{ $errors->first('iban') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-11 col-sm-12">
                <div class="panel-content">
                    <h4>Add More Vendor</h4>
                    <button type="button" id="add-row" class="btn btn-success">Add Row</button>
                    <button type="button" id="delete-row" class="btn btn-danger">Delete Row</button>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Select</th>
                            <th>Name</th>
                            <th>Contact#</th>
                            <th>Cnic</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Iban</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Save</button>
					</span>
            </div>
        </form>
    </div>
@endsection

@section('page-script')

    <script src="{{ URL::asset('vendor/bootstrap/js/toggle.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/chosen.jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/init.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-choosen/js/prism.js') }}"></script>
    <script>

        $("#add-row").on("click", function () {
            var add = "<tr>" +
                "<td><input type='checkbox' name='select-delete'></td>" +
                "<td><input id='name' type='text' class='form-control name' name='name[]'  placeholder='name' required" +
                "       value='{{ old('name') }}'></td>" +
                "<td><input id='contact_no' type='text' class='form-control contact_no' name='contact_no[]' placeholder='03XX-XXXXXXX' required" +
                "       value='{{ old('contact_no') }}'></td>" +
                "<td><input id='cnic' type='text' class='form-control cnic' name='cnic[]' placeholder=\"35202-XXXXXXX-X\" required" +
                "       value='{{ old('cnic') }}'></td>" +
                "<td><input id='email' type='email' class='form-control email' name='email[]' placeholder=\"abc@xyz.com\" required" +
                "       value='{{ old('email') }}'></td>" +
                "<td><input id='address' type='text' class='form-control address' name='address[]' placeholder=\"101 XYZ Street 14 plaza abc, Lahore, Pk\" required" +
                "       value='{{ old('address') }}'></td>" +
                "<td><input id='iban' type='text' class='form-control iban' name='iban[]' placeholder=\"PK36 SCBL 00XXXXXXXXXXXXXX\" required" +
                "       value='{{ old('iban') }}'></td>" +
                "</tr>";

            $("table tbody").append(add);
        });
        $("#delete-row").click(function(){
            $("table tbody").find('input[name="select-delete"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });



    </script>
@endsection

