@extends('layouts.app')
@section('page-style')
    <style type="text/css">
        form{
            margin: 20px 0;
        }
        form input, button{
            padding: 5px;
        }
        table{
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid #cdcdcd;
        }
        table th, table td{
            padding: 10px;
            text-align: left;
        }
    </style>
@endsection
@section('content')
@section('pageTitle', 'Installments')
<div class="section-heading">
    <h1 class="page-title">Installments Form</h1>
</div>
<div class="row">
    <form class="form-auth-small" role="form" method="POST" action="{{ url('/installments') }}" data-parsley-validate novalidate>
        {{ csrf_field() }}
        <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="panel-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <button type="button" class="add-row btn btn-success">Add Row</button>
                <button type="button" class="delete-row btn btn-danger">Delete Row</button>
                <button type="submit" class="btn btn-info">Send</button>
            </div>
        </div>
    </form>
</div>




@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".add-row").click(function(){
                var markup = "<tr>" +
                    "<td><input type='checkbox' name='record'></td>" +
                    "<td><input type='text' name='name[]' placeholder='Name'></td>" +
                    "<td><input type='text' name='email[]' placeholder='Email Address'></td></tr>";
                $("table tbody").append(markup);
            });

            // Find and remove selected table rows
            $(".delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>
@endsection