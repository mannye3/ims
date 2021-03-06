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
                        <h4 class="page-title">Stocks</h4>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-success-rgba" data-toggle="modal" data-target="#varying-modal" data-whatever="@fat"><i class="feather icon-plus mr-2"></i>Add New Shop</button>
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
                                    <h5 class="modal-title" id="varying-modal-label">New Stock</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="/stocks" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Shop:</label>
                                                    <select style="border-color:#9794af;" name="shop_id" class="form-control" required>
                                                        {{-- <option>--Select Shop --</option> --}}
                                                        @if (auth()->user()->shop)
                                                            <option value="{{ auth()->user()->shop->id }}">{{ auth()->user()->shop->name }}</option>
                                                        @else
                                                        <option>--Select Shop --</option>
                                                            @foreach ($shops as $shop)
                                                                <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Quantity:</label>
                                                    <input style="border-color:#9794af;" name="quantity" type="number" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Shortage Quantity:</label>
                                                    <input style="border-color:#9794af;" name="shortage_qty" type="number" class="form-control" required>
                                                </div>
                                            </div>

                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Item:</label>
                                                    <input style="border-color:#9794af;" name="name" type="text" class="form-control" id="recipient-name" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Cost Price:</label>
                                                    <input style="border-color:#9794af;" name="cost_price" type="number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Selling Price:</label>
                                                    <input style="border-color:#9794af;" name="selling_price" type="number" class="form-control" required>
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

                        
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                {{-- <h5 class="card-title">Data Export Table</h5> --}}
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Shop</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Selling Price</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($allStock as $stock)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $stock->shop->name ?? null }}</td>
                                                <td>{{ $stock->name ?? null }}</td>
                                                <td>{{ $stock->quantity ?? null }}</td>
                                                <td>???{{ $stock->cost_price ?? null }}</td>
                                                <td>???{{ $stock->selling_price ?? null }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal{{ $stock->id }}" data-whatever="@fat"><i class="feather icon-edit-2"></i></button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal{{ $stock->id }}" data-whatever="@fat"><i class="feather icon-trash-2"></i></button>
                                                </td>
                                            </tr>


                                            @include('stock.partials.edit_stock', [$stock, $shops])

                                            @include('stock.partials.delete_stock', $stock)


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