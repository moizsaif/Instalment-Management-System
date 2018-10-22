<!DOCTYPE html>
/**
 * Created by PhpStorm.
 * User: Moiz
 * Date: 10/21/2018
 * Time: 7:05 AM
 */

<html>
<head>
    <meta charset="utf-8">
    <title>IMS </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Edit GRN</h2><br  />
    <form method="post" action="{{action('GRNController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="no">no:</label>
                <input type="text" class="form-control" name="no" value="{{$GRN->no}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" value="{{$GRN->status}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="accepted_qty">Accepted Quantity:</label>
                <input type="text" class="form-control" name="Accepted Quantity" value="{{$GRN->accepted_qty}}">
            </div>
        </div>
            <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="rejected_qty">Rejected Quantity:</label>
        <input type="text" class="form-control" name="Rejected Quantity" value="{{$GRN->rejected_qty}}">
    </div>
</div>
    </form>
</div>
</body>
</html>