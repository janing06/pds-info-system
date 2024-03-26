<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $learningAndDevelopment ? 'Update' : 'Add' }} Learning And Development</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form
        wire:submit="{{ $learningAndDevelopment ? 'updateLearningAndDevelopment' : 'createNewLearningAndDevelopment' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="title">Title <x-asterisks /> </label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            wire:model="title" placeholder="Title of Learning and Development" />
                        @error('title')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="start_date">Start Date <x-asterisks /> </label>
                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                            id="start_date" wire:model="start_date" placeholder="Start Date" />
                        @error('start_date')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="end_date">End Date <x-asterisks /> </label>
                        <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                            id="end_date" wire:model="end_date" placeholder="End Date" />
                        @error('end_date')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="number_of_hours">Number of Hours <x-asterisks /> </label>
                        <input type="number" min="0"
                            class="form-control @error('number_of_hours') is-invalid @enderror" id="number_of_hours"
                            wire:model="number_of_hours" placeholder="Number of Hours" />
                        @error('number_of_hours')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="type">Type <x-asterisks /></label>
                        <select wire:model="type" name="type" id="type"
                            class="form-select @error('type') is-invalid @enderror">
                            <option value="">Select Option</option>
                            <option value="technical">Technical</option>
                            <option value="managerial">Managerial</option>
                            <option value="supervisory">Supervisory</option>
                        </select>
                        @error('type')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="sponsored_by">Conducted/Sponsored by <x-asterisks /> </label>
                        <input type="text" name="sponsored_by"
                            class="form-control @error('sponsored_by') is-invalid @enderror" id="sponsored_by"
                            wire:model="sponsored_by" placeholder="Conducted/Sponsored by" />
                        @error('sponsored_by')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close
            </button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> Save
            </button>
        </div>
    </form>
</div>
