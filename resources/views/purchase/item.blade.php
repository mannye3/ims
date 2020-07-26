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
                        <h4 class="page-title">Purchase</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="/purchase/create" class="btn btn-success-rgba"><i class="feather icon-plus mr-2"></i>Add New</a>
                            {{-- <button class="btn btn-warning-rgba" data-toggle="modal" data-target="#varying-modal" data-whatever="@fat"><i class="feather icon-plus mr-2"></i>Add Bulk Item</button> --}}
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">


                    {{-- MODAL --}}
                    <!-- Modal -->
                    <div class="modal fade" id="varying-modal" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varying-modal-label">New Purchase</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Quantity:</label>
                                                    <input style="border-color:#9794af;" type="number" class="form-control" id="recipient-name">
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Price:</label>
                                                    <input style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Shop:</label>
                                                    <select style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                                        <option>-- Select Shop --</option>
                                                        <option>Shop 1</option>
                                                        <option>Shop 2</option>
                                                        <option>Shop 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END MODAL --}}
                        
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Data Export Table</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <a href="/purchase/details" type="button" class="btn btn-primary"><i class="feather icon-eye"></i></a>
                                                <button type="button" class="btn btn-danger"><i class="feather icon-trash-2"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <a href="/purchase/details" type="button" class="btn btn-primary"><i class="feather icon-eye"></i></a>
                                                <button type="button" class="btn btn-danger"><i class="feather icon-trash-2"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <a href="/purchase/details" type="button" class="btn btn-primary"><i class="feather icon-eye"></i></a>
                                                <button type="button" class="btn btn-danger"><i class="feather icon-trash-2"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </>
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