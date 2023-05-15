<div>

    @include('livewire.admin.brand.modal-form')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Brands List
                        <button class="btn btn-primary text-white btn-sm float-end" data-bs-toggle="modal"
                            data-bs-target="#addBrandModel" wire:click="openModal">Add Brands</button>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->slug }}</td>
                                    <td>{{ $brand->status == '1' ? 'hidden' : 'visible' }}</td>
                                    <td>
                                        <button type="button" wire:click="editBrand({{ $brand->id }})"
                                            class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#updateBrandModel">
                                            Edit
                                        </button>
                                        <button type="button" wire:click="deleteBrand({{ $brand->id }})"
                                            class="btn btn-sm btn-danger text-white" data-bs-toggle="modal"
                                            data-bs-target="#deleteBrandModel">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No Brands Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addBrandModel').modal('hide');
            $('#updateBrandModel').modal('hide');
            $('#deleteBrandModel').modal('hide');
        });
    </script>
@endpush
