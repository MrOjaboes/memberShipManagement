<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#fgroup">
    <i class="fas fa-plus"></i> New Group
</button>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="fgroup" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Group Name"
                            wire:model="title">
                        @error('title')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Description</label>
                        <input type="text" class="form-control" id="" wire:model="description"
                            placeholder="Enter Description">
                        @error('description')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-success close-modal">Add Group</button>
            </div>
        </div>
    </div>
</div>
