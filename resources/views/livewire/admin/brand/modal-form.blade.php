<div wire:ignore.self class="modal fade" id="addBrandModel" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Add Brands</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="storeBrand()">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Brand Name</label>
                        <input type="text" class="form-control" wire:model.defer="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Brand Slug</label>
                        <input type="text" class="form-control" wire:model.defer="slug">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <input type="checkbox" wire:model.defer="status" /> (Checked = Hidden, Un-Checked = Visible)
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="updateBrandModel" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Update Brands</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden"></span>
                </div>Loading...
            </div>
            <div wire:loading.remove>
                <form wire:submit.prevent="updateBrand()">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Brand Name</label>
                            <input type="text" class="form-control" wire:model.defer="name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Brand Slug</label>
                            <input type="text" class="form-control" wire:model.defer="slug">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <input type="checkbox" wire:model.defer="status" /> (Checked = Hidden, Un-Checked = Visible)
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="deleteBrandModel" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Brands</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden"></span>
                </div>Loading...
            </div>
            <div wire:loading.remove>
                <form wire:submit.prevent="destroyBrand()">
                    <div class="modal-body">
                        <h4>Are you sure you want to delete data ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger text-white">Yes, delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
