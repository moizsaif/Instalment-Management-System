<!DOCTYPE html>
/**
 * Created by PhpStorm.
 * User: Moiz
 * Date: 10/21/2018
 * Time: 6:05 AM
 */

<html>
<head>
  <meta charset="utf-8">
  <title>Index Page</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
  <br />
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
    <tr>
      <th>ID</th>
      <th>No</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Quantity</th>
      <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($PurchaseOrder as $PurchaseOrder)
      @php
        $date=date('Y-m-d', $PurchaseOrder['date']);
      @endphp
      <tr>
        <td>{{$PurchaseOrder['id']}}</td>
        <td>{{$PurchaseOrder['no']}}</td>
        <td>{{$date}}</td>
        <td>{{$PurchaseOrder['amount']}}</td>
        <td>{{$PurchaseOrder['quantity']}}</td>

        <td><a href="{{action('$PurchaseOrderController@edit', $PurchaseOrder['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('$PurchaseOrderController@destroy', $PurchaseOrder['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
</body>
</html>