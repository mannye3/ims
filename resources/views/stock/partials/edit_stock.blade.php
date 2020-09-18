{{-- MODAL --}}
    <!-- Modal -->
    <div class="modal fade" id="edit-modal{{ $stock->id }}" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varying-modal-label">Edit Stock Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="stocks/{{ $stock->id }}" method="POST">
                        @csrf

                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"> Shop:</label>
        
                                    @if (auth()->user()->shop)
                                    <select style="border-color:#9794af;" name="shop_id" class="form-control" required>
                                        <option value="{{ auth()->user()->shop->id }}">{{ auth()->user()->shop->name }}</option>
                                    </select>
                                    @else
                                    <select style="border-color:#9794af;" name="shop_id" class="form-control" required>
                                        <option value="{{ $stock->shop_id }}">{{ $stock->shop->name }}</option>
                                            @foreach ($shops as $shop)
                                                <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                            @endforeach
                                    </select>
                                    @endif
                        
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Quantity:</label>
                                    <input style="border-color:#9794af;" name="quantity" type="number" class="form-control" value="{{ $stock->quantity }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Shortage Quantity:</label>
                                    <input style="border-color:#9794af;" name="shortage_qty" type="number" class="form-control" value="{{ $stock->shortage_qty }}">
                                </div>
                            </div>

                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Item:</label>
                                    <input style="border-color:#9794af;" name="name" type="text" class="form-control" id="recipient-name" value="{{ $stock->name }}">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Cost Price:</label>
                                    <input style="border-color:#9794af;" name="cost_price" type="number" class="form-control" value="{{ $stock->cost_price }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Selling Price:</label>
                                    <input style="border-color:#9794af;" name="selling_price" type="number" class="form-control" value="{{ $stock->selling_price }}">
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