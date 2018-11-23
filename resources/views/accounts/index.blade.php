@extends('layouts.app')
@section('page-style')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="{{ URL::asset('css/treeCSS.css') }}">
@endsection
@section('pageTitle', 'Accounts')
@section('content')
    <div class="section-heading">
        <h1 class="page-title">Accounts List</h1>
        <a href="{{ url('/accounts/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add
            Account</a>
        <a href="{{ url('/vouchers/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Add
            Voucher</a>
    </div>
    <div class="row">
        <div class="col-md-10">

            <div class="panel-content">
                {{--@foreach($accountsL1 as $account)--}}
                {{--@endforeach--}}

                <div class="tree ">
                    <ul>
                        <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#Web"
                                     aria-expanded="true" aria-controls="Web"><i class="collapsed"><i
                                                class="fas fa-folder"></i></i><i class="expanded"><i
                                                class="far fa-folder-open"></i></i> Accounts</a></span>
                            <div id="Web" class="collapse">
                                <ul>
                                    @foreach($accountsL1 as $account)
                                        <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse"
                                                     href="#Level-{{ $loop->iteration }}" aria-expanded="false"
                                                     aria-controls="Level1-{{ $loop->iteration }}"><i class="collapsed"><i
                                                                class="fas fa-folder"></i></i><i class="expanded"><i
                                                                class="far fa-folder-open"></i></i> {{$account->name}}</a></span>
                                            <ul>
                                                <div id="Level1-{{ $loop->iteration }}" class="collapse">
                                                    <li><span><a style="color:#000; text-decoration:none;"
                                                                 data-toggle="collapse" href="#Level2"
                                                                 aria-expanded="false" aria-controls="Level2"><i
                                                                        class="collapsed"><i class="fas fa-folder"></i></i><i
                                                                        class="expanded"><i
                                                                            class="far fa-folder-open"></i></i>Level 2</a></span>
                                                        <ul>
                                                            <div id="Level2" class="collapse">
                                                            </div>
                                                        </ul>
                                                    </li>
                                                </div>
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
@endsection


{{--<div id="Level1" class="collapse">--}}
{{--<li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#Level2" aria-expanded="false" aria-controls="Level2"><i class="collapsed"><i class="fas fa-folder"></i></i><i class="expanded"><i class="far fa-folder-open"></i></i>Level 2</a></span>--}}
{{--<ul>--}}
{{--<div id="Level2" class="collapse">--}}
{{--<li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#Level3" aria-expanded="false" aria-controls="Level3"><i class="collapsed"><i class="fas fa-folder"></i></i><i class="expanded"><i class="far fa-folder-open"></i></i>Level 3</a></span>--}}
{{--<ul>--}}
{{--<div id="Level3" class="collapse">--}}
{{--<li><span><i class="far fa-file"></i><a href="#!"> Level 4</a></span></li>--}}
{{--<li><span><i class="far fa-file"></i><a href="#!"> Level 4</a></span></li>--}}
{{--</div>--}}
{{--</ul>--}}
{{--</li>--}}
{{--</div>--}}
{{--</ul>--}}
{{--</li>--}}
{{--</div>--}}



