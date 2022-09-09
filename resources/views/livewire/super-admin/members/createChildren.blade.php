<div>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#childrenModal">
        <i class="fas fa-plus"></i> Add New
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="childrenModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Child Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">First Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Name" wire:model="first_name">
                                    @error('first_name')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Last Name</label>
                                    <input type="text" class="form-control" id="" wire:model="last_name"
                                        placeholder="Last name">
                                    @error('last_name')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Middle Name</label>
                                    <input type="text" class="form-control" id="" wire:model="middle_name"
                                        placeholder="Last name">
                                    @error('middle_name')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Email</label>
                                    <input type="text" class="form-control" id="" wire:model="email"
                                        placeholder="Last Email">
                                    @error('email')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Gender</label>
                                    <select wire:model="gender" class="form-control">
                                        <option value="">--- Gender ---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Primary Phone</label>
                                    <input type="text" class="form-control" id="" wire:model="primary_phone"
                                        placeholder="">
                                    @error('primary_phone')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Secondary Phone</label>
                                    <input type="text" class="form-control" id="" wire:model="secondary_phone"
                                        placeholder="">
                                    @error('secondary_phone')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Level</label>
                                    <input type="text" class="form-control" id="" wire:model="level" placeholder="">
                                    @error('level')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for=" ">Class</label>
                                    <input type="text" class="form-control" id="" wire:model="class" placeholder="">
                                    @error('class')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Birth Date</label>
                                    <input type="date" class="form-control" id="" wire:model="birth_date" placeholder=" ">
                                    @error('birth_date')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Guardian One</label>
                                    <input type="text" class="form-control" id="" wire:model="guardian_one"
                                        placeholder="Last name">
                                    @error('guardian_one')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Guardian Two</label>
                                    <input type="text" class="form-control" id="" wire:model="guardian_two"
                                        placeholder="Last name">
                                    @error('guardian_two')
                                        <span class="text-danger error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-success btn-block close-modal">Add
                                Details</button>
                            <button type="button" class="btn btn-danger btn-block close-btn" data-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
