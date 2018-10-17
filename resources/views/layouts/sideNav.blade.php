<!--
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17/10/2018
 * Time: 10:30 PM
 */
-->

<!-- LEFT SIDEBAR -->
<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
        <span class="sr-only">Toggle Fullwidth</span>
        <i class="fa fa-angle-left"></i>
    </button>



    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="img/user.png" class="img-responsive img-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                @if (Auth::guest())
                @else
                    <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Hello, <strong>{{ Auth::user()->name }}</strong> <i class="fa fa-caret-down"></i></a>
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
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Sales</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="#">Cash Sales</a></li>
                        <li class=""><a href="#">Installment Sales</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Accounts</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="#">Add</a></li>
                        <li class=""><a href="#">View</a></li>
                        <li class=""><a href="#">Update</a></li>
                        <li class=""><a href="#">View Voucher</a></li>
                        <li class=""><a href="#">Edit Voucher</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Product</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="productForm.html">Add</a></li>
                        <li class=""><a href="productForm.html">Edit Details</a></li>
                        <li class=""><a href="#">Order Placement</a></li>
                        <li class=""><a href="#">Update GRN</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Installment</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="#">Generate Plan</a></li>
                        <li class=""><a href="#">Customer Profile</a></li>
                        <li class=""><a href="#">Reporting</a></li>
                        <li class=""><a href="#">Monthly Payment</a></li>
                        <li class=""><a href="#">Partial Payment</a></li>
                        <li class=""><a href="#">Update Payments</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Admin</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="#">Add Retailers</a></li>
                        <li class=""><a href="#">Edit Retailers</a></li>
                        <li class=""><a href="#">Delete GRN</a></li>
                        <li class=""><a href="#">Delete PO</a></li>
                        <li class=""><a href="#">Delete Product</a></li>
                        <li class=""><a href="#">Delete Voucher</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>t</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="#">t</a></li>
                        <li class=""><a href="#">t</a></li>
                        <li class=""><a href="#">t</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#subPages" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Pages</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="page-profile.html">User Profile</a></li>
                        <li class=""><a href="page-login.html">Login</a></li>
                        <li class=""><a href="page-register.html">Register</a></li>
                        <li class=""><a href="page-lockscreen.html">Lockscreen</a></li>
                        <li class=""><a href="page-forgot-password.html">Forgot Password</a></li>
                        <li class=""><a href="page-404.html">Page 404</a></li>
                        <li class=""><a href="page-500.html">Page 500</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- END LEFT SIDEBAR -->