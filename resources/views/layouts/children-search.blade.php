<div class="row">
    <div class="col-md-12">
        <form wire:submit.prevent="searchChildren">
            <div class="form-group">
                <input type="text" wire:model="searchTerm" class="form-control" placeholder="Search by First Name,class">
            </div>
        </form>
    </div>
</div>
