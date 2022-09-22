<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" wire:model="title" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Fellowship Group </label>
                        <input type="text" class="form-control" readonly wire:model="fellowship_group_id" size="10">

                         <select wire:model="fellowship_group_id" class="form-control">
                            @foreach ($f_groups as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                        @error('fellowship_group')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Description</label>
                        <input type="text" class="form-control" wire:model="description" id="exampleFormControlInput2" placeholder="Enter Email">
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-success" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>
