<!DOCTYPE html>
/**
 * Created by PhpStorm.
 * User: Moiz
 * Date: 10/21/2018
 * Time: 6:58 AM
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
        <th>PO_ID</th>
        <th>No</th>
        <th>Date</th>
        <th>Status</th>
        <th>Accepted Quantity</th>
        <th>Rejected Quantity</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($GRN as $GRN)
        @php
            $date=date('Y-m-d', $GRN['date']);
        @endphp
        <tr>
            <td>{{$GRN['po_id']}}</td>
            <td>{{$GRN['no']}}</td>
            <td>{{$date}}</td>
            <td>{{$GRN['status']}}</td>
            <td>{{$GRN['accepted_qty']}}</td>
            <td>{{$GRN['rejected_qty']}}</td>
            <td><a href="{{action('$GRNController@edit', $GRN['po_id'])}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{action('$GRNController@destroy', $GRN['po_id'])}}" method="post">
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