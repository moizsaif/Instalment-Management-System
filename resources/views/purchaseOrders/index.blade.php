@extends('layouts.app')
@section('content')

    <div class="section-heading">
        <h1 class="page-title">Purchase Order</h1>
        <a href="{{ url('/purchaseOrders/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel-content">
                <table class="table table-responsive" >
                    <thead>
                    <tr>

                        <th></th>
                        <th>Item List</th>
                        <th>Sales Price:</th>
                        <th>Quantity:</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($PO as $PO)
                        <tr>
                            <td><a href={{route('purchaseOrders.show',$PO->id)}}/></td>
                            <td>{{$PO->pr_id}}</td>
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
