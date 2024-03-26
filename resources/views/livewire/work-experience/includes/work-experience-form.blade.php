<div>

    <div class="modal-header">
        <h5 class="modal-title">{{ $workExperience ? 'Update' : 'Add' }} Work Experience</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $workExperience ? 'updateWorkExperience' : 'createNewExperience' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="school_name">Start <x-asterisks /></label>
                        <input type="date" id="start_date"
                            class="form-control @error('start_date') is-invalid @enderror" wire:model="start_date"
                            placeholder="Start"></input>
                        @error('start_date')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="end_date">End <x-asterisks /></label>
                        <input type="date" id="start_date"
                            class="form-control @error('end_date') is-invalid @enderror" wire:model="end_date"
                            placeholder="End"></input>
                        @error('end_date')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="position_title">Position Title <x-asterisks /></label>
                        <input type="text" id="position_title"
                            class="form-control @error('position_title') is-invalid @enderror"
                            wire:model="position_title" placeholder="Position Title"></input>
                        @error('position_title')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="company">Company <x-asterisks /></label>
                        <input type="text" id="company" class="form-control @error('company') is-invalid @enderror"
                            wire:model="company" placeholder="Company"></input>
                        @error('company')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="monthly_salary">Monthly Salary <x-asterisks /></label>
                        <div class="input-group">
                            <span class="input-group-text">₱</span>
                            <input type="number" min="0" id="monthly_salary"
                                class="form-control @error('monthly_salary') is-invalid @enderror"
                                wire:model="monthly_salary" placeholder="00">
                            @error('monthly_salary')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="salary_grade">Salary Grade <x-asterisks /></label>
                        <div class="input-group">
                            <input type="number" min="1" max="33" id="salary_grade"
                                class="form-control @error('salary_grade') is-invalid @enderror"
                                wire:model="salary_grade" placeholder="Salary Grade">
                            @error('salary_grade')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="salary_step">Salary Step <x-asterisks /></label>
                        <div class="input-group">
                            <input type="number" min="1" max="8" id="salary_step"
                                class="form-control @error('salary_step') is-invalid @enderror" wire:model="salary_step"
                                placeholder="Salary Step">
                            @error('salary_step')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3 pull-">
                        <label for="status_of_appointment">Status of Appointment <x-asterisks /></label>
                        <select wire:model="status_of_appointment" name="status_of_appointment"
                            id="status_of_appointment"
                            class="form-select @error('status_of_appointment') is-invalid @enderror">
                            <option value="">Select Option</option>
                            <option value="regular">Regular</option>
                            <option value="substitute">Substitute</option>
                            <option value="part_time">Part-Time</option>
                            <option value="casual">Causal</option>
                            <option value="contract">Contract</option>
                        </select>
                        @error('status_of_appointment')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3 pull-">
                        <label for="govt_service">Government Service <x-asterisks /></label>
                        <select wire:model="govt_service" name="govt_service" id="govt_service"
                            class="form-select @error('govt_service') is-invalid @enderror">
                            <option value="">Select Option</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        @error('govt_service')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Cancel </button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> Save
            </button>
        </div>
    </form>

    <script></script>
</div>
