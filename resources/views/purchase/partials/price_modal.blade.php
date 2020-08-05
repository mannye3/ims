{{-- MODAL --}}
    <!-- Modal -->

    <div class="modal fade bd-example-modal-sm" id="purchase_price{{ $order->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleSmallModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/purchase/update/price/{{ $order->id }}" method="POST">
                        @csrf
                        <label for="recipient-name" class="col-form-label">Price:</label>
                        <input style="border-color:#9794af;" type="number" class="form-control" name="newPrice" value="{{ $order->price }}">
                        
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

                </form>


            </div>
        </div>
    </div>


    {{-- END MODAL --}}