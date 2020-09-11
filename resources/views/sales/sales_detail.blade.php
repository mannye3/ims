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
            
            <!-- End Breadcrumbbar -->
             <!-- Start Breadcrumbbar -->                    
             <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Invoice</h4>
                        <div class="breadcrumb-list">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            {{-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> --}}
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- End row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-12 col-lg-10 col-xl-10">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="invoice">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="col-12 col-md-7 col-lg-7">
                                                <div class="invoice-logo">
                                                    <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" alt="invoice-logo">
                                                </div>
                                                <h4>Sunec Electricals.</h4>
                                                <p>Block 18 shop 20, Electrical section Alaba internationa</p>
                                                <p class="mb-0">Lagos, Nigeria.</p>
                                            </div>
                                            <div class="col-12 col-md-5 col-lg-5">
                                                {{-- <div class="invoice-name">
                                                    <h5 class="text-uppercase mb-3">Invoice</h5>
                                                    <p class="mb-1">No : #98765</p>
                                                    <p class="mb-0">15 July, 2019</p>
                                                    <h4 class="text-success mb-0 mt-3">$1180</h4>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="invoice-billing">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="invoice-address">
                                                    <h6 class="mb-3">Bill to</h6>
                                                    <h6 class="text-muted">Amy Adams</h6>
                                                    <ul class="list-unstyled">
                                                        <li>417 Redbud Drive, Manhattan Building, Whitestone, NY, New York-11357</li>  
                                                        <li>+1-9876543210</li>  
                                                        <li>amyadams@email.com</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                {{-- <div class="invoice-address">
                                                    <h6 class="mb-3">Shipped to</h6>
                                                    <h6 class="text-muted">Amy Adams</h6>
                                                    <ul class="list-unstyled">
                                                        <li>417 Redbud Drive, Manhattan Building, Whitestone, NY, New York-11357</li>  
                                                        <li>+1-9876543210</li>  
                                                        <li>amyadams@email.com</li>  
                                                    </ul>
                                                </div> --}}
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                {{-- <div class="invoice-address">
                                                    <div class="card">
                                                        <div class="card-body bg-info-rgba text-center">
                                                            <h6>Payment Method</h6>
                                                            <p><i class="mdi mdi-paypal text-info font-40"></i></p>
                                                            <p>via PayPal</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="invoice-summary">
                                        <div class="table-responsive ">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>    
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($sales as $item)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        
                                                        <td>{{ $item->stocks->name }}</td>
                                                        <td>
                                                            {{ $item->quantity }}
                                                        </td>
                                                        <td>
                                                            ₦{{ number_format($item->price) }}
                                                            {{-- <a href="#" class="text-success"><i class="feather icon-edit-2" data-toggle="modal" data-target="#purchase_price{{ $order->id }}" data-whatever="@fat"></i></a> --}}
                
                                                        </td>
                                                        <td class="text-right">₦{{ number_format($item->price * $item->quantity) }}</td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="invoice-summary-total">
                                        <div class="row">
                                            <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                <div class="order-note">
                                                    <p class="mb-3"><span class="badge badge-info-inverse font-14">This is Free Shipping Order</span></p>
                                                    <h6>Special Note for this order:</h6>
                                                    <p>Please, Pack with product air bag and handle with care.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                <div class="order-total table-responsive ">
                                                    <table class="table table-borderless text-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>Amount Paid :</td>
                                                                <td>₦{{ $saleBatch->amount_paid }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="f-w-7 font-18"><h5>Total Amount :</h5></td>
                                                                <td class="f-w-7 font-18"><h5>₦{{ $saleBatch->total_cost }}</h5></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-meta">
                                        
                                    </div> 
                                    <div class="invoice-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <p class="mb-0">Thank yopu for your Business.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="invoice-footer-btn">
                                                    <a href="javascript:window.print()" class="btn btn-primary-rgba py-1 font-16"><i class="feather icon-printer mr-2"></i>Print</a>
                                                    {{-- <a href="#" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Submit</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
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