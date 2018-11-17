<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Register | IMS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box register">
                <div class="content">
                    <div class="header">
                        <div class="logo text-center"><img src="" alt="IMS"></div>
                        <p class="lead">Create an account</p>
                    </div>
                    <form class="form-auth-small" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label sr-only">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                   value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('cnic') ? ' has-error' : '' }}">
                            <label for="name" class="control-label sr-only">CNIC</label>
                            <input type="text" class="form-control" id="cnic" name="cnic" placeholder="CNIC"
                                   value="{{ old('cnic') }}">

                            @if ($errors->has('cnic'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="contact" class="control-label sr-only">Number</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Number"
                                   value="{{ old('contact') }}">

                            @if ($errors->has('contact'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="control-label sr-only">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                                   value="{{ old('address') }}">

                            @if ($errors->has('address'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label sr-only">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label sr-only">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="control-label sr-only">Confirm Password</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm Password">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif

                        </div>


                        <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                        <div class="bottom">
                            <span class="helper-text">Already have an account? <a href="{{url('/login')}}">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- END WRAPPER -->
</body>

</html>
