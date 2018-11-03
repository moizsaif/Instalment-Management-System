@extends('layouts.app')
@section('content')
/**
 * Created by PhpStorm.
 * User: Moiz
 * Date: 10/23/2018
 * Time: 6:00 AM
 */


    <div class="section-heading">
        <h1 class="page-title">Purchase Order</h1>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th></th>
                        <th>No</th>
                        <th>Amount:</th>
                        <th>Quantity:</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($PO as $PO)
                        <tr>
                            <td><a href={{route('purchaseorder.show',$PO->id)}}/></td>
                            <td>{{$PO->no}}</td>
                            <td>{{$PO->amount}}</td>
                            <td>{{$PO->quantity}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection