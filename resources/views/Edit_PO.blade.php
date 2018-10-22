<!DOCTYPE html>
/**
 * Created by PhpStorm.
 * User: Moiz
 * Date: 10/21/2018
 * Time: 6:22 AM
 */

<html>
<head>
    <meta charset="utf-8">
    <title>IMS </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Edit PO</h2><br  />
    <form method="post" action="{{action('PurchaseOrderController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="no">no:</label>
                <input type="text" class="form-control" name="no" value="{{$PurchaseOrder->no}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" name="amount" value="{{$PurchaseOrder->amount}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="quantity">Quantity:</label>
                <input type="text" class="form-control" name="quantity" value="{{$PurchaseOrder->quantity}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>