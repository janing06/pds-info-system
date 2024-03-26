<div>
    <div class="card border-0 shadow my-4">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h3 class="fs-5 fw-bold mb-0">Learning And Development</h3>
            <button type="button" class="btn btn-sm btn-primary" wire:click="openForm"><i class="far fa-plus"></i>
                Add</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Title</th>
                            <th class="border-0">Start Date</th>
                            <th class="border-0">End Date</th>
                            <th class="border-0">Number of hours</th>
                            <th class="border-0">Type</th>
                            <th class="border-0">Conducted/Sponsored by</th>
                            <th class="border-0 rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($this->learningAndDevelopments as $data)
                            <tr>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->title }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->start_date }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->end_date }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->number_of_hours }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->type }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->sponsored_by }}</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="bi bi-three-dots-vertical"></span>
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu py-2">
                                            <button type="button" class="dropdown-item fw-bold"
                                                wire:click="showLearningAndDevelopment({{ $data }})"><span
                                                    class="bi bi-pencil-fill text-success me-2"></span>Edit</button>
                                            <button type="button"
                                                class="dropdown-item text-danger rounded-bottom fw-bold"
                                                wire:click="openDeleteModal({{ $data }})"><span
                                                    class="bi bi-trash-fill text-danger me-2"></span>Remove</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7">No record.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $this->learningAndDevelopments->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    </div>


    <div>
        {{-- form modal --}}
        <div class="modal fade" wire:ignore.self id="learningAndDevelopmentModal" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg"showDeleteModal role="document">
                <div class="modal-content">
                    @include('livewire.learning-and-development.includes.learning-and-development-form')
                </div>
            </div>
        </div>

        {{-- delete modal --}}
        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="learningAndDevelopmentDeleteModal"
            tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Confirmation</h5>
                        <span class="pull-right" wire:loading>
                            <img src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Delete Work Experience?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow"><i
                                class="fas fa-window-close"></i> Close </button>
                        <button type="button" id="destroy-voluntary-work" class="btn btn-danger"
                            wire:click="deleteLearningAndDevelopment"><i class="far fa-trash-alt"></i> Delete </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            window.addEventListener('open-learning-and-development-form-modal', event => {
                $('#learningAndDevelopmentModal').modal('show');
            });

            window.addEventListener('close-learning-and-development-form-modal', event => {
                $('#learningAndDevelopmentModal').modal('hide');
            });

            window.addEventListener('open-learning-and-development-delete-modal', event => {
                $('#learningAndDevelopmentDeleteModal').modal('show');
            });

            window.addEventListener('close-learning-and-development-delete-modal', event => {
                $('#learningAndDevelopmentDeleteModal').modal('hide');
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
