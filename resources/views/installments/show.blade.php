@extends('layouts.app')
@section('content')
@section('pageTitle', 'Installment')


<h2>Installment Number: <a href="{{route('installments.edit', $installment->id)}}">{{$installment->no}}</a></h2>
<h2><a href="#">Customer Profile</a></h2>
{{--{{route('customers.show', $installment->id)}}--}}


@endsection
@section('page-script')
    <script>
        $(function () {

        });
    </script>
@endsection