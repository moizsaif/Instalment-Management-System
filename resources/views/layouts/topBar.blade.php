<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
        </div>
        <!-- logo -->
        <div class="navbar-brand">
            <a href="{{ url('/home') }}"><img src="img/logo.png" alt="IMS Logo" class="img-responsive logo"></a>
        </div>
        <!-- end logo -->
        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="lnr lnr-alarm"></i>
                            <span class="notification-dot"></span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="header"><strong>You have 7 new notifications</strong></li>

                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                            <span class="timestamp">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-bar-chart text-muted"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Website visits from Facebook is 27% higher than last week.</p>
                                            <span class="timestamp">Yesterday</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Your campaign <strong>Holiday Sale</strong> is approved.</p>
                                            <span class="timestamp">2 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-exclamation-circle text-danger"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Error on website analytics configurations</p>
                                            <span class="timestamp">3 days ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="footer"><a href="#" class="more">See all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="lnr lnr-cog"></i>
                        </a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li class="menu-heading">ACCOUNT SETTINGS</li>
                            <li><a href="#"><i class="fa fa-fw fa-edit"></i> <span>Basic</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-bell"></i> <span>Notifications</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-sliders"></i> <span>Preferences</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-lock"></i> <span>Privacy</span></a></li>
                            <li class="menu-heading">BILLING</li>
                            <li><a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span>Invoices</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-credit-card"></i> <span>Payments</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-refresh"></i> <span>Renewals</span></a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end navbar menu -->
        </div>
    </div>
</nav>
<!-- END NAVBAR -->