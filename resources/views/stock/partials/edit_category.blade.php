{{-- MODAL --}}
    <!-- Modal -->
    <div class="modal fade" id="edit-modal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="varying-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varying-modal-label">Edit category Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="categories/{{ $category->id }}" method="POST">
                        @csrf

                        @method('PUT')

                        <div class="row">
                            <div class="col-md-5">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input style="border-color:#9794af;" name="name" type="text" class="form-control" value="{{ $category->quantity }}" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Unit Price:</label>
                                    <input style="border-color:#9794af;" name="price" type="text" class="form-control" value="{{ $category->price }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Item:</label>
                                    <input style="border-color:#9794af;" name="name" type="text" class="form-control" value="{{ $category->name }}" required>
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