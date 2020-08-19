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
                        <h4 class="page-title">Cash Movement</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            {{-- <button class="btn btn-success-rgba" data-toggle="modal" data-target="#varying-modal" data-whatever="@fat"><i class="feather icon-plus mr-2"></i>Add New Bank</button> --}}
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">

                    @foreach ($shops as $shop)
                    
                    <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <h5 class="card-title mb-0">Cash Movement</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-4">{{ $shop->name }}</h5>
                                <p>Cash At Hand <span class="float-right">75%</span></p>
                                <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Cash In Bank <span class="float-right">30%</span></p>
                                <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Debtors <span class="float-right">50%</span></p>
                                <div class="progress mb-1" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>                                        
                            </div>
                            <div class="card-footer">
                                <a href class="mr-3">View Details </a>
                                {{-- <div class="avatar-group">
                                    <div class="avatar">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                            <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                        </a>
                                    </div>
                                    <div class="avatar">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                            <img src="{{ asset('assets/images/users/women.svg') }}" alt="avatar" class="rounded-circle">
                                        </a>
                                    </div>
                                </div> --}}
                                {{-- <span class="float-right mt-2"><i class="feather icon-paperclip mr-1"></i>5</span> --}}
                            </div>
                        </div>
                    </div>

                    @endforeach

                    {{-- <div class="col-lg-6 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <h5 class="card-title mb-0">Progress</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-4">Project Think Tank</h5>
                                <p>Prototyping <span class="float-right">75%</span></p>
                                <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Designing <span class="float-right">30%</span></p>
                                <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p>Development <span class="float-right">50%</span></p>
                                <div class="progress mb-1" style="height: 4px;">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>                                        
                            </div>
                            <div class="card-footer">
                                <span class="mr-3">Teams : </span>
                                <div class="avatar-group">
                                    <div class="avatar">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                            <img src="assets/images/users/men.svg" alt="avatar" class="rounded-circle">
                                        </a>
                                    </div>
                                    <div class="avatar">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Amy Adams">
                                            <img src="{{ asset('assets/images/users/women.svg') }}" alt="avatar" class="rounded-circle">
                                        </a>
                                    </div>
                                </div>
                                <span class="float-right mt-2"><i class="feather icon-paperclip mr-1"></i>5</span>
                            </div>
                        </div>
                    </div> --}}

            <!-- End Contentbar -->

            <!-- Start Footerbar -->
            @include('partials.footer')
            
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->

@endsection