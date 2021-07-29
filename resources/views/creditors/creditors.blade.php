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
                        <h4 class="page-title">Creditors</h4>
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
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th># NO</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Total Cost</th>
                                            <th>Amount Paid</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($creditors as $creditor)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $creditor->customer->firstname }} {{ $creditor->customer->lastname }}</td>
                                                    <td>{{ $creditor->customer->phone }}</td>
                                                    <td>₦{{ $creditor->total_cost }}</td>
                                                    <td>₦{{ $creditor->amount_paid }}</td>
                                                    <td>{{ $creditor->created_at }}</td>
                                                    <td>
                                                        <a href="/sales/details/{{ $creditor->reference_no }}" type="button" class="btn btn-primary"><i class="feather icon-eye"></i></a>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit-modal{{ $creditor->id }}" data-whatever="@fat"><i class="feather icon-gear"></i></button>
                                                    </td>
                                                </tr>

                                                {{-- MODAL --}}
                                                <!-- Modal -->
                                                <div class="modal fade" id="edit-modal{{ $creditor->id }}" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="varying-modal-label">Paid Debt</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form action="/creditors/{{ $creditor->id }}/pay" method="POST">
                                                                    @csrf
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="col-form-label">Amount:</label>
                                                                                <input style="border-color:#9794af;" name="amount_paid" type="text" class="form-control" id="recipient-name" required>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">SAVE</button>
                                                            </div>

                                                        </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- END MODAL --}}


                                            @endforeach
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