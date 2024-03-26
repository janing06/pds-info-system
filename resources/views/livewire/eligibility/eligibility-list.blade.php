<div>
    <div class="card border-0 shadow my-4">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h3 class="fs-5 fw-bold mb-0">Civil Service Eligibility</h3>
            <button type="button" class="btn btn-sm btn-primary" wire:click="openForm"><i class="far fa-plus"></i> Add
                Eligibility</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Career Service</th>
                            <th class="border-0">Rating</th>
                            <th class="border-0">Date of Examination</th>
                            <th class="border-0">Place of Examination</th>
                            <th class="border-0">License Number</th>
                            <th class="border-0">License Validity Date</th>
                            <th class="border-0 rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($eligibilities as $data)
                            <tr>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->career_service }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->rating }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->examination_date }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->examination_place }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->license_number }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->license_validity_date }}</a>
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
                                                wire:click="showEligibility({{ $data }})"><span
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
                                <td colspan="8">No record.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $eligibilities->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    </div>


    {{-- form modal --}}
    <div class="modal fade" wire:ignore.self id="eligibilityModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                @include('livewire.eligibility.includes.eligibility-form')
            </div>
        </div>
    </div>



    {{-- delete modal --}}
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="eligibilityDeleteModal" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <span class="pull-right" wire:loading>
                        <img src="{{ asset('img/spinner.gif') }}">
                    </span>
                </div>
                <div class="modal-body">
                    <p>Delete eligiblity?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow"><i
                            class="fas fa-window-close"></i> Close </button>
                    <button type="button" id="destroy-eligiblity" wire:click="deleteEligibility"
                        class="btn btn-danger"><i class="far fa-trash-alt"></i>
                        Delete </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('open-eligibility-form-modal', event => {
                $('#eligibilityModal').modal('show');
            });

            window.addEventListener('close-eligibility-form-modal', event => {
                $('#eligibilityModal').modal('hide');
            });

            window.addEventListener('open-eligibility-delete-modal', event => {
                $('#eligibilityDeleteModal').modal('show');
            });

            window.addEventListener('close-eligibility-delete-modal', event => {
                $('#eligibilityDeleteModal').modal('hide');
            });

            // window.addEventListener('alert', event => {
            //     toast.fire({
            //         icon: event.detail.type,
            //         title: event.detail.message ?? '',
            //         showCloseButton: true,
            //         width: 500,
            //         timer: 2000,
            //         timerProgressBar: true,
            //     });
            // });

            // $("#year_graduated").datepicker({
            //     format: "yyyy",
            //     viewMode: "years",
            //     minViewMode: "years"
            // }).on('changeDate', function(e) {
            //     var selectedYear = e.date.getFullYear();
            //     @this.year_graduated = selectedYear.toString();
            // });

            // $("#start_date").datepicker({
            //     format: "yyyy-mm", // format for year and month
            //     viewMode: "months", // show the view in months initially
            //     minViewMode: "months" // set the minimum view to months
            // }).on('changeDate', function(e) {
            //     selectedDate = e.date
            //     var selectedMonth = selectedDate.getMonth() + 1; // Month is zero-based, so add 1
            //     var selectedYear = selectedDate.getFullYear();

            //     // Format the month with leading zeros if needed
            //     var formattedMonth = selectedMonth < 10 ? '0' + selectedMonth : selectedMonth;

            //     // Combine the formatted month and year
            //     var selectedMonthAndYear = `${selectedYear}-${formattedMonth}`;

            //     @this.start_date = selectedMonthAndYear.toString();

            // });

            // $("#end_date").datepicker({
            //     format: "yyyy-mm", // format for year and month
            //     viewMode: "months", // show the view in months initially
            //     minViewMode: "months" // set the minimum view to months
            // }).on('changeDate', function(e) {
            //     selectedDate = e.date
            //     var selectedMonth = selectedDate.getMonth() + 1; // Month is zero-based, so add 1
            //     var selectedYear = selectedDate.getFullYear();

            //     // Format the month with leading zeros if needed
            //     var formattedMonth = selectedMonth < 10 ? '0' + selectedMonth : selectedMonth;

            //     // Combine the formatted month and year
            //     var selectedMonthAndYear = `${selectedYear}-${formattedMonth}`;

            //     @this.end_date = selectedMonthAndYear.toString();
            // });
        </script>
    @endpush
</div>
