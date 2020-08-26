@extends('layouts.app')

@section('content')

    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            
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
                        <h4 class="page-title">Sales</h4>
                        <div class="breadcrumb-list">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="/sales/create" class="btn btn-success-rgba"><i class="feather icon-plus mr-2"></i>Add New</a>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-8">
                        <div class="card m-b-30 dash-widget">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <h5 class="card-title mb-0">Earning</h5>
                                    </div>
                                    <div class="col-7">
                                        <ul class="nav nav-pills float-right" id="pills-earning-tab-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-month-tab-justified" data-toggle="pill" href="#pills-month-justified" role="tab" aria-selected="true">Month</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-week-tab-justified" data-toggle="pill" href="#pills-week-justified" role="tab" aria-selected="false">Week</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Currency</th>
                                                <th>Plateform</th>
                                                <th>Email</th>
                                                <th>ID</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img class="w-25 rounded-circle" src="assets/images/crypto/bitcoin_small.png" alt="Generic placeholder image"></td>
                                                <td>bitcoin.com</td>
                                                <td>johncb@gmail.com</td>
                                                <td>BCC98F59</td>
                                                <td>$598.69</td>
                                                <td><span class="badge badge-primary-inverse">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td><img class="w-25 rounded-circle" src="assets/images/crypto/bcc_small.png" alt="Generic placeholder image"></td>
                                                <td>bitcoin.com</td>
                                                <td>johncb@gmail.com</td>
                                                <td>BCC98F59</td>
                                                <td>$598.69</td>
                                                <td><span class="badge badge-success-inverse">Success</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col --> 
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 Orbiter - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->

@endsection