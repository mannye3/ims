@extends('layouts.app')

@section('content')

    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            {{-- <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        @include('partials.leftBar')

        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            @include('partials.topBarMobile')

            
            <!-- Start Topbar -->
            @include('partials.topNavBar')


            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">DASHBOARD</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        {{-- <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>                         --}}
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">  
                 <!-- Start row -->

                 {{-- <div class="row"> 
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <h5 class="card-title mb-0">Shop <br/>1</h5>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h4 class="mb-0">₦2075 <span class="badge badge-secondary-inverse font-14 v-a-m">+23</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <h5 class="card-title mb-0">Shop <br/>2</h5>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h4 class="mb-0">₦2075 <span class="badge badge-secondary-inverse font-14 v-a-m">+23</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <h5 class="card-title mb-0">Shop <br/>3</h5>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h4 class="mb-0">₦2075 <span class="badge badge-secondary-inverse font-14 v-a-m">+23</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div> --}}
                 {{-- row --}}
                
                <!-- Start row -->
                <div class="row"> 
                    
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-success-inverse mr-0"><i class="fa fa-money"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Today Revenue</h5>
                                        {{-- <h4 class="mb-0">₦{{ number_format($todayRevenue) }}</h4> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-success"><i class="feather icon-trending-up mr-1"></i>25%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-success-inverse mr-0"><i class="feather icon-award"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Today Expenses</h5>
                                        {{-- <h4 class="mb-0">₦{{ number_format($todayExpenses) }}</h4> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-warning"><i class="feather icon-trending-down mr-1"></i>23%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-warning-inverse mr-0"><i class="feather icon-briefcase"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Stocks Value</h5>
                                        <h4 class="mb-0">₦{{ $stockValue }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-success"></i>{{ $stockQuantity }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-user"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Staffs</h5>
                                        <h4 class="mb-0">{{ $staffs }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-warning"><i class="feather icon-trending-down mr-1"></i>10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->

                {{-- Next Line --}}


                <!-- Start row -->
                <div class="row"> 
                    
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-success-inverse mr-0"><i class="fa fa-money"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Total Revenue</h5>
                                        {{-- <h4 class="mb-0">₦{{ number_format($allRevenue) }}</h4> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-success"><i class="feather icon-trending-up mr-1"></i>25%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-success-inverse mr-0"><i class="feather icon-award"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">All Expenses</h5>
                                        <h4 class="mb-0">₦{{ number_format($allExpenses) }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-warning"><i class="feather icon-trending-down mr-1"></i>23%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-warning-inverse mr-0"><i class="feather icon-briefcase"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Stocks Value</h5>
                                        <h4 class="mb-0">₦{{ $stockValue }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-success"></i>{{ $stockQuantity }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-user"></i></span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <h5 class="card-title font-14">Staffs</h5>
                                        <h4 class="mb-0">{{ $staffs }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <span class="font-13"></span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="badge badge-warning"><i class="feather icon-trending-down mr-1"></i>10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->

                <!-- Start row -->
                <div class="row">                  
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-6 col-lg-9">
                                        <h5 class="card-title mb-0">Top Sales</h5>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        {{-- <select class="form-control font-12">
                                            <option value="class1">Class 1</option>
                                            <option value="class2">Class 2</option>
                                            <option value="class3">Class 3</option>
                                            <option value="class4">Class 4</option>
                                            <option value="class5" selected>Class 5</option>
                                        </select> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>SKU</th>
                                                <th>Location</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John Doe</td>
                                                <td>5</td>
                                                <td>99</td>
                                                <td>99</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jimmy Simpson</td>
                                                <td>5</td>
                                                <td>98</td>
                                                <td>98</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lorea Johnson</td>
                                                <td>5</td>
                                                <td>97</td>
                                                <td>97</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Merry Aniston</td>
                                                <td>5</td>
                                                <td>96</td>
                                                <td>96</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Jessica Perry</td>
                                                <td>5</td>
                                                <td>95</td>
                                                <td>95</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Maria Salkova</td>
                                                <td>5</td>
                                                <td>94</td>
                                                <td>434</td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-6 col-lg-9">
                                        <h5 class="card-title mb-0">Low Stocks</h5>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        {{-- <select class="form-control font-12">
                                            <option value="class1">Class 1</option>
                                            <option value="class2">Class 2</option>
                                            <option value="class3">Class 3</option>
                                            <option value="class4">Class 4</option>
                                            <option value="class5" selected>Class 5</option>
                                        </select> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Shop/Branch</th>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($lowStock as $item)

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->shop->name }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>
                                                    <span class="badge badge-danger-inverse py-2 px-3 font-12">Restock</span>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                                                                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            @include('partials.footer')


        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    
@endsection