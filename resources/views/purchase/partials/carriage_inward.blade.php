{{-- MODAL --}}
    <!-- Modal -->
    <div class="modal fade" id="carriage{{ $purchase->reference_no }}" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varying-modal-label">New Purchase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/carriage_inward/{{ $purchase->reference_no }}" method="POST">
                        @csrf
                        <div class="row">

                            <input style="border-color:#9794af;" type="hidden" name="purchase_id" value="{{ $purchase->id }}">
                                
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Purpose:</label>
                                    <input style="border-color:#9794af;" type="text" class="form-control" name="purpose" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Amount:</label>
                                    <input style="border-color:#9794af;" type="number" class="form-control" name="price" required>
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