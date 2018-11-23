@extends('layouts.app')
@section('pageTitle', 'Add User')
@section('page-style')
    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-choosen/css/chosen.css') }}">
@endsection
@section('content')
    <div class="section-heading">
        <h1 class="page-title">User Form</h1>
    </div>
    <div class="row">
        <form class="form-auth-small" role="form" method="POST" action="{{ url('/users') }}"
              data-parsley-validate novalidate>
            {{ csrf_field() }}
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label ">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label ">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <select class="chosen-select" id="role_id" name="role_id" required>
                            <option value="">Select User Role</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel-content">
                    <div class="form-group">
                        <label for="name" class="control-label ">CNIC</label>
                        <input type="text" class="form-control" id="cnic" name="cnic"
                               value="{{ old('cnic') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="contact" class="control-label ">Number</label>
                        <input type="text" class="form-control" id="contact" name="contact"
                               value="{{ old('contact') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="address" class="control-label ">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                               value="{{ old('address') }}" required>
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



