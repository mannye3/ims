{{-- MODAL --}}
    <!-- Modal -->
    <div class="modal fade" id="save-purchase" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varying-modal-label">Save Purchase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/purchase/add" method="POST">
                        @csrf
                        <h5><strong>Branch shop is made for</strong> </h5>
                        <label for="recipient-name" class="col-form-label">Branch:</label>
                        <select style="border-color:#9794af;" type="number" class="form-control" name="shop_id">
                            @if (auth()->user()->shop)
                                <option value="{{ auth()->user()->shop->id }}">{{ auth()->user()->shop->name }}</option>
                            @else
                            <option>--Select Shop --</option>
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        <hr>
                        <label for="recipient-name" class="col-form-label">Payment Method:</label>
                        <select style="border-color:#9794af;" type="number" class="form-control" name="paymentMethod">
                            <option value="cash">Cash</option>
                            <option value="pos">POS</option>
                            <option value="transfer">Bank Transfer</option>
                        </select>

                        <label for="recipient-name" class="col-form-label">Amount Paid:</label>
                        <input style="border-color:#9794af;" type="number" class="form-control" name="amount_paid">
                        
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