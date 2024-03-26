<div>
    <div class="card border-0 shadow my-4">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h3 class="fs-5 fw-bold mb-0">Work Experiences</h3>
            <button type="button" class="btn btn-sm btn-primary" wire:click="openForm"><i class="far fa-plus"></i>
                Add</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Start Date</th>
                            <th class="border-0">End Date</th>
                            <th class="border-0">Position Title</th>
                            <th class="border-0">Company</th>
                            <th class="border-0">Monthly Salary</th>
                            <th class="border-0">Salary Grade</th>
                            <th class="border-0">Salary Step</th>
                            <th class="border-0">Status of Appointment</th>
                            <th class="border-0">Gov't Service</th>
                            <th class="border-0 rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($this->workExperiences as $data)
                            <tr>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->start_date }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->end_date }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->position_title }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->company }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">₱ {{ $data->monthly_salary }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->salary_grade }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->salary_step }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold"
                                        href="#">{{ ucwords($data->status_of_appointment) }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->govt_service ? 'Yes' : 'No' }}</a>
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
                                                wire:click="showWorkExperience({{ $data }})"><span
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
                                <td colspan="10">No record.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $this->workExperiences->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    </div>


    {{-- form modal --}}
    <div class="modal fade" wire:ignore.self id="WorkExperienceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                @include('livewire.work-experience.includes.work-experience-form')
            </div>
        </div>
    </div>

    {{-- delete modal --}}
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="workExperienceDeleteModal" tabindex="-1"
        role="dialog" aria-hidden="true">
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
                    <button type="button" id="destroy-work-experience" class="btn btn-danger"
                        wire:click="deleteWorkExperience"><i class="far fa-trash-alt"></i> Delete </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('open-experience-form-modal', event => {
                $('#WorkExperienceModal').modal('show');
            });

            window.addEventListener('close-experience-form-modal', event => {
                $('#WorkExperienceModal').modal('hide');
            });

            window.addEventListener('open-experience-delete-modal', event => {
                $('#workExperienceDeleteModal').modal('show');
            });

            window.addEventListener('open-experience-delete-modal', event => {
                $('#workExperienceDeleteModal').modal('hide');
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
