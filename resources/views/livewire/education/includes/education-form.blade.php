<div>

    <div class="modal-header">
        <h5 class="modal-title">{{ $education ? 'Update' : 'Add' }} Education</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $education ? 'updateEducation' : 'createNewEducation' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3 pull-">
                        <label for="level">Level <x-asterisks /></label>
                        <select wire:model="level" name="level" id="level"
                            class="form-select @error('level') is-invalid @enderror">
                            <option value="">Select Option</option>
                            <option value="elementary">Elementary</option>
                            <option value="secondary">Secondary</option>
                            <option value="college">College</option>
                            <option value="masters">Master's</option>
                        </select>
                        @error('level')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="school_name">School Name <x-asterisks /></label>
                        <input type="text" class="form-control @error('school_name') is-invalid @enderror"
                            wire:model="school_name" placeholder="School Name"></input>
                        @error('school_name')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="basic_education_degree_course">Basic Education/Degree/Course <x-asterisks /></label>
                        <input type="text"
                            class="form-control @error('basic_education_degree_course') is-invalid @enderror"
                            wire:model="basic_education_degree_course"
                            placeholder="Basic Education/Degree/Course"></input>
                        @error('basic_education_degree_course')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="start_date is-invalid">Start Period <x-asterisks /></label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('start_date') is-invalid @enderror"
                                wire:model="start_date" id="start_date" placeholder="Start Period" readonly></input>
                            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                            @error('start_date')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="end_date">End Period <x-asterisks /></label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('end_date') is-invalid @enderror"
                                wire:model="end_date" id="end_date" placeholder="End Period" readonly></input>
                            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                            @error('end_date')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="highest_level">Highest Level/Unit Earned (if not graduated)</label>
                        <input type="text" class="form-control @error('highest_level') is-invalid @enderror"
                            wire:model="highest_level" placeholder="Highest Level/Unit Earned"></input>
                        @error('highest_level')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="year_graduated">Year Graduated (if graduated)</label>
                        <div class="input-group">
                            <input id="year_graduated" type="text"
                                class="form-control @error('year_graduated') is-invalid @enderror"
                                wire:model="year_graduated" placeholder="Year Graduated" readonly></input>
                            <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                            @error('year_graduated')
                                <x-input-error message="{{ $message }}" />
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="scholarship">Scholarship</label>
                        <input type="text" class="form-control @error('scholarship') is-invalid @enderror"
                            wire:model="scholarship" placeholder="Scholarship"></input>
                        @error('scholarship')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="honor_received">Honor Received</label>
                        <input type="text" class="form-control @error('honor_received') is-invalid @enderror"
                            wire:model="honor_received" placeholder="Honor Received"></input>
                        @error('honor_received')
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
