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
                        <h4 class="page-title">New Purchase</h4>
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
                            <div class="card-body">                                
                                <form>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Shop:</label>
                                                <select style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                                    <option>-- Select Shop --</option>
                                                    @foreach ($shops as $shop)
                                                        <option value="">{{ $shop->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Quantity:</label>
                                                <input style="border-color:#9794af;" type="number" class="form-control" id="recipient-name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Price:</label>
                                                <input style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                    <buttun typr="button" class="btn btn-success"> Business</buttun>
                                                </div>
                                        </div>

                                        

                                    </div>

                                </form>                           
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
                                                <th scope="col">Photo</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Price</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href="#" class="text-success mr-2"><i class="feather icon-edit-2"></i></a><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                                <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Apple MacBook Pro</td>
                                                <td>
                                                    <input style="border-color:#9794af;" size="1" type="text" class="form-control" id="recipient-name">
                                                </td>
                                                <td>
                                                    <input style="border-color:#9794af;" size="4" type="text" class="form-control" id="recipient-name">
                                                </td>
                                                <td class="text-right">$500</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><a href="#" class="text-success mr-2"><i class="feather icon-edit-2"></i></a><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                                <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Dell Alienware</td>
                                                <td>2</td>
                                                <td>$20</td>
                                                <td class="text-right">$200</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><a href="#" class="text-success mr-2"><i class="feather icon-edit-2"></i></a><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>                                                
                                                <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                                <td>Acer Predator Helios</td>
                                                <td>3</td>
                                                <td>$30</td>
                                                <td class="text-right">$300</td>
                                            </tr>
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
                        <div class="card m-b-30">
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
                        </div>                  
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