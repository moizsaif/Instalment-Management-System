<!-- LEFT SIDEBAR -->
<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
        <span class="sr-only">Toggle Fullwidth</span>
        <i class="fa fa-angle-left"></i>
    </button>



    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ URL::asset('img/user.png') }}" class="img-responsive img-circle user-photo" alt="User Profile Picture"
            width="150" height="150">
            <div class="dropdown">
                @if (Auth::guest())
                @else
                    <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Hello, <strong>{{ Auth::user()->name }}</strong>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                @endif
            </div>
        </div>


        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="active"><a href="{{'/home'}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-printer"></i> <span>Sales</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="{{ url('/accounts/') }}"><i class="lnr lnr-tag"></i><span>Cash Sales</span></a></li>
                        <li class=""><a href="{{ url('/accounts/') }}"><i class="lnr lnr-cart"></i><span>Installment Sales</span></a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-line-chart"></i> <span>Accounting</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="{{ url('/accounts/') }}"><i class="lnr lnr-list"></i><span>Accounts</span></a></li>
                        <li class=""><a href="{{ url('/vouchers/') }}"><i class="lnr lnr-layers"></i><span>Vouchers</span></a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-database"></i> <span>Inventory</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="{{ url('/products/') }}"><i class="lnr lnr-list"></i><span>Products</span></a></li>
                        <li class=""><a href="{{ url('/purchaseOrders/') }}"><i class="lnr lnr-pencil"></i><span>Order Placement</span></a></li>
                        <li class=""><a href="{{ url('/grns/') }}"><i class="lnr lnr-pencil"></i><span>Receive Note</span></a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-calendar"></i> <span>Installment</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="{{ url('/installments/') }}"><i class="lnr lnr-pencil"></i><span>Generate Plan</span></a>
                        </li>
                        <li class=""><a href="#"><i class="lnr lnr-user"></i><span>Customer Profile</span></a></li>
                        <li class=""><a href="#"><i class="lnr lnr-chart-bars"></i><span>Reporting</span></a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-user"></i> <span>Admin</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="#">Add Retailers</a></li>
                        <li class=""><a href="#">Edit Retailers</a></li>
                        <li class=""><a href="#">Delete GRN</a></li>
                        <li class=""><a href="#">Delete PO</a></li>
                        <li class=""><a href="#">Delete Product</a></li>
                        <li class=""><a href="#">Delete Voucher</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- END LEFT SIDEBAR -->