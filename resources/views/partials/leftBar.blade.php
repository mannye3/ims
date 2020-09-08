<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            {{-- <a href="index.html" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
            <a href="index.html" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a> --}}
            Suntec
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="/home">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid" alt="widgets"><span>Dashboard</span>
                    </a>
                </li> 

                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Sales</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="/sales">Sales</a></li>
                        <li><a href="/refunds">Sales Refund</a></li> 
                    </ul>
                </li>
                
                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Purchase</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="/purchase">Puchase</a></li>
                        <li><a href="/carriage_inward">Carriage Inward</a></li>
                        {{-- <li><a href="/purchase">Ge
                            neral Puchase</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.sv') }}g" class="img-fluid" alt="dashboard"><span>Stocks Management</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        {{-- <li><a href="/stocks">Category</a></li> --}}
                        <li><a href="/stocks">Items</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Debtors</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="/debtors">Debtors</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Creditors</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="#">Creditors</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/expenses">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid" alt="widgets"><span>Expenses</span>
                    </a>
                </li>

                @role('ceo','manager')
                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Financial Reports</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="/transactions">All Transactions</a></li>
                        <li><a href="/cash/movement">Cash Movement</a></li>
                        {{-- <li><a href="/transactions">Weekly Report</a></li> --}}
                    </ul>
                </li>
                @endrole

                <li>
                    <a href="/customers">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid" alt="widgets"><span>Customers</span>
                    </a>
                </li>

                @role('ceo','manager')
                <li>
                    <a href="/shops">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid" alt="widgets"><span>Shops</span>
                    </a>
                </li>
                @endrole

                @role('ceo','manager')
                <li>
                    <a href="/banks">
                        <img src="{{ asset('assets/images/svg-icon/widgets.svg') }}" class="img-fluid" alt="widgets"><span>Banks</span>
                    </a>
                </li>
                @endrole

                @role('ceo','manager')
                <li>
                    <a href="javaScript:void();">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>User Management</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="/users">User</a></li>
                    </ul>
                </li>
                @endrole

            </ul>
        </div>
        <!-- End Navigationbar -->
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>