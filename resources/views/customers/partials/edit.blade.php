{{-- MODAL --}}
    <!-- Modal -->
    <div class="modal fade" id="edit-modal{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varying-modal-label">Edit Customer Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="customers/{{ $customer->id }}" method="POST">
                        @csrf

                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"> Firstname:</label>
                                    <input style="border-color:#9794af;" name="firstname" type="text" class="form-control" value="{{ $customer->firstname }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Lastname:</label>
                                    <input style="border-color:#9794af;" name="lastname" type="text" class="form-control" value="{{ $customer->lastname }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Phone:</label>
                                    <input style="border-color:#9794af;" name="phone" type="number" class="form-control" value="{{ $customer->phone }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Address:</label>
                                    <input style="border-color:#9794af;" name="address" type="text" class="form-control" value="{{ $customer->address }}" required>
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