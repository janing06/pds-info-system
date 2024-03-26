<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $voluntaryWork ? 'Update' : 'Add' }} Voluntary Work</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $voluntaryWork ? 'updateVoluntaryWork' : 'createNewVoluntaryWork' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="organization_name">Organization Name <x-asterisks /> </label>
                        <input type="text" class="form-control @error('organization_name') is-invalid @enderror"
                            id="organization_name" wire:model="organization_name" placeholder="Organization Name" />
                        @error('organization_name')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="organization_address">Organization Address <x-asterisks /> </label>
                        <input type="text" class="form-control @error('organization_address') is-invalid @enderror"
                            id="organization_address" wire:model="organization_address"
                            placeholder="Organization Address" />
                        @error('organization_address')
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
                        <label for="position">Position/Nature of Work <x-asterisks /> </label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror"
                            id="position" wire:model="position" placeholder="Position/Nature of Work" />
                        @error('position')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="modal-footer">
    <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
            class="far fa-window-close"></i>
        Close </button>
    <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> Save
    </button>
</div>
</form>
</div>
