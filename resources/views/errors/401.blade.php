<!DOCTYPE html>
<html>
<head>
    <title>IMS - Insufficient Permissions</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #6e2955;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            background: #E8ECEE;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
            font-family: bold;
        }

        #lg {
            font-size: 42px;
            color: #843534;
        }

        #bk {
            font-size: 42px;

        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Insufficient Permissions</div>
        <br>
        <br>
        <br>
        <a id="lg" class="title" href="{{ url('/logout') }}">Logout</a><br>
        <a id="bk" class="title" href="{{ url()->previous() }}">Back</a>
    </div>
</div>
</body>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</html>
