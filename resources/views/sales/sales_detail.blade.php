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
                        <h4 class="page-title">New Order</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
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
                    <div class="col-lg-12 col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <h5 class="card-title mb-0">Order No : #986953</h5>
                                    </div>
                                    <div class="col-5 text-right">
                                        <span class="badge badge-success-inverse">Completed</span>                                             
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">                                
                                <div class="row mb-5">
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Order Placed</h6>
                                        <p class="mb-0">16/06/2019 at 04:23 PM</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Name</h6>
                                        <p class="mb-0">Michelle Johnson</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Email ID</h6>
                                        <p class="mb-0">demo@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="order-primary-detail mb-4">
                                        <h6>Contact No</h6>
                                        <p class="mb-0">+1 9876543210</p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div> 
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Order Items</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Action</th> 
                                                <th scope="col">Product</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Price</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sales as $item)
                                                
                                            <tr>
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>
                                                        <a href="#" class="text-danger"><i class="feather icon-trash"></i></a>
                                                    </td>
                                                    {{-- <td>{{ $item->stocks->name }}</td> --}}
                                                    <td>
                                                        {{ $item->quantity }}
                                                    </td>
                                                    <td>
                                                        ₦{{ number_format($item->price) }}
                                                        {{-- <a href="#" class="text-success"><i class="feather icon-edit-2" data-toggle="modal" data-target="#purchase_price{{ $order->id }}" data-whatever="@fat"></i></a> --}}
            
                                                    </td>
                                                    <td class="text-right">₦{{ number_format($item->price * $item->quantity) }}</td>
                                                </tr>
                                            </tr>

                                            @endforeach

                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row border-top pt-3">
                                    <div class="col-md-12 order-2 order-lg-1 col-lg-4 col-xl-6">
                                        <div class="order-note">
                                            <p class="mb-5"><span class="badge badge-secondary-inverse">Free Shipping Order</span></p>
                                            <h6>Note :</h6>
                                            <p>Please, Pack with product air bag and handle with care.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 order-1 order-lg-2 col-lg-8 col-xl-6">
                                        <div class="order-total table-responsive ">
                                            <table class="table table-borderless text-right">
                                                <tbody>
                                                    <tr>
                                                        <td>Sub Total :</td>
                                                        <td>$1000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping :</td>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax(18%) :</td>
                                                        <td>$180.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-black f-w-7 font-18">Amount :</td>
                                                        <td class="text-black f-w-7 font-18">$1180.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="button" class="btn btn-primary-rgba my-1"><i class="feather icon-plus mr-2"></i>Add Product</button>
                                <button type="button" class="btn btn-success-rgba my-1"><i class="feather icon-repeat mr-2"></i>Refund</button>
                                <button type="button" class="btn btn-danger-rgba my-1"><i class="feather icon-trash mr-2"></i>Cancel</button>
                            </div>
                        </div>
                        {{-- <div class="card m-b-30">
                            <div class="card-header">                                
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <h5 class="card-title mb-0">Invoice PDF Details</h5>
                                    </div>
                                    <div class="col-5 text-right">
                                        <button type="button" class="btn btn-success py-1"><i class="feather icon-download mr-2"></i>Invoice</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="order-primary-detail">
                                    <h6>Current PDF Details</h6>
                                    <p class="mb-0">Invoice No : #986953</p>
                                    <p class="mb-0">Seller GST : 24HY87078641Z0</p>
                                    <p class="mb-0">Purchase GST : 24HG9878961Z1</p>
                                </div>
                            </div>
                        </div>                   --}}
                    </div>
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