<form wire:submit.prevent="storeChurch" class="px-5 py-2">
    <input type="hidden" wire:model="church_id">
    <div class="form-group">
        <input type="text" wire:model="title" class="form-control" placeholder="Title">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" wire:model="location" class="form-control" placeholder="Location">
        @error('location')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" wire:model="description" class="form-control" placeholder="Description">
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <button class="btn btn-danger text-white" type="submit">Update Church Details</button>
    </div>

</form>
