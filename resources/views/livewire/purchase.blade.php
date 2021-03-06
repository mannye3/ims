<div>
    <div class="row">
        <!-- Start col -->

        {{-- <div class="col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">                                
                    <form>
                        <div class="row">
                            <div class="col-md-6">
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

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Supplier:</label>
                                    <select style="border-color:#9794af;" type="text" class="form-control" id="recipient-name">
                                        <option>-- Select Shop --</option>
                                        @foreach ($shops as $shop)
                                            <option value="">{{ $shop->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>                           
                </div>
            </div>
                  
        </div> --}}


        <div class="col-lg-4 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="card-title mb-0">Selet Product</h5>
                        </div>
                    </div>                                
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='addProduct'>

                        {{-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Shop:</label>
                            <select style="border-color:#9794af;" wire:model="shop" type="text" class="form-control">
                                <option>-- Select Shop --</option>
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Supplier:</label>
                            <select style="border-color:#9794af;" wire:model="stock_id" type="text" class="form-control" id="recipient-name">
                                <option>-- Select Shop --</option>
                                @foreach ($stocks as $stock)
                                    <option value="{{ $stock->id }}">{{ $stock->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr> --}}

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Product:</label>
                            <select style="border-color:#9794af;" wire:model="stock_id" type="text" class="form-control" id="recipient-name">
                                <option>-- Select Shop --</option>
                                @foreach ($stocks as $stock)
                                    <option value="{{ $stock->id }}">{{ $stock->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Quantity:</label>
                            <input style="border-color:#9794af;" type="number" class="form-control" wire:model="quantity">
                        </div>

                        <input type="" wire:model.lazy="orderReference">
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-cart-arrow-down"></i> Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->


        <div class="col-lg-8 col-xl-8">
            {{-- <div class="card m-b-30">
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
            </div>  --}}
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
                                @foreach ($orders as $order)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                        <td>{{ $order->stock->name }}</td>
                                        <td>
                                            {{ $order->quantity }}
                                        </td>
                                        <td>
                                            {{ $order->stock->price }}
                                        </td>
                                        <td class="text-right">???{{ $order->stock->price * $order->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row border-top pt-3">
                        <div class="col-md-12 order-2 order-lg-1 col-lg-4 col-xl-6">
                            <div class="order-note">
                                {{-- <p class="mb-5"><span class="badge badge-success"><i class="fa fa-cart-plus">Add Item</i></span></p> --}}
                                {{-- <button type="button" class="btn btn-primary my-1"><i class="feather icon-plus mr-2"></i>Add</button> --}}
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
                    <form wire:submit.prevent='store'>
                        <button type="button" class="btn btn-success-rgba my-1"><i class="feather icon-repeat mr-2"></i>Refund</button>
                        <button type="button" wire:click='removeOrder' class="btn btn-danger-rgba my-1"><i class="feather icon-trash mr-2"></i>Cancel</button>
                    </form>
                </div>
            </div>                  
        </div>
        <!-- End col -->
    </div>
</div>
