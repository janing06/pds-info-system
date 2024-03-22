<!-- Livewire Component Blade File (livewire/children.blade.php) -->
<div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <h4>Children </h4>
                    <!-- Ensure that wire:click triggers the method to toggle the modal -->
                    <button class="btn btn-primary" wire:click="open"><i class="me-2 bi bi-plus me-2"></i> Add
                        Child</button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>birth date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($children as $child)
                                <tr>
                                    <td>{{ $child->child_name }}</td>
                                    <td>{{ $child->child_date_of_birth }}</td>
                                    <td>@include('pds.sub.table-buttons')</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">No child</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $children->links(data: ['scrollTo' => false]) }}
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('livewire.includes.add-child-modal') --}}
    </div>

    <x-modal modalId="add-child-modal" button-id="add-child" type="add-child" label="child" />
    <x-modal modalId="delete-child-modal" button-id="delete-child" type="delete" label="child" livewire="true"
        childId="{{ $child_id_to_delete }}" />

    {{-- <x-modal modalId="show-child-modal" button-id="update-child" type="update-child" label="child" /> --}}

    @push('scripts')
        <script>
            window.addEventListener('close-form-modal', event => {
                $('#add-child-modal').modal('hide');
            });

            window.addEventListener('open-form-modal', event => {
                $('#add-child-modal').modal('show');
            });

            window.addEventListener('show-form-modal', event => {
                $('#show-child-modal').modal('show');
            });

            window.addEventListener('show-delete-modal', event => {
                $('#delete-child-modal').modal('show');
            });


            window.addEventListener('close-delete-modal', event => {
                $('#delete-child-modal').modal('hide');
            });

            window.addEventListener('alert', event => {
                toast.fire({
                    icon: event.detail.type,
                    title: event.detail.message ?? '',
                    showCloseButton: true,
                    width: 500,
                    timer: 2000,
                    timerProgressBar: true,
                });
            });
        </script>
    @endpush

</div>
