
<div>
    @include('livewire.admin.brand.modal-form')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Brands List
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModel" class="btn btn-primary btn-sm float-end">Add Brands</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-boardered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($brands as $brand )
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->slug }}</td>
                            <td>{{ $brand->status == '1' ? 'hidden':'visible' }}</td>
                            <td>
                                <a href="#" wire:click="editBrand({{ $brand->id }})"  data-bs-toggle="modal" data-bs-target="#UpdateBrandModel" class="btn btn-success">Edit</a>
                                <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#deleteBrandModel"  class="btn btn-danger">Delete</a>
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
window.addEventListener('close-modal',event=>{
    $('#addBrandModel').modal('hide');
    $('#UpdateBrandModel').modal('hide');
    $('#deleteBrandModel').modal('hide');


});
</script>

@endpush
