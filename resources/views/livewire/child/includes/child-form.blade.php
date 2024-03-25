<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ isset($child) ? 'Update' : 'Add' }} Child</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $child ? 'updateChild' : 'createNewChild' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="activity">Name <x-asterisks /> </label>
                        <input type="text" class="form-control @error('child_name') is-invalid @enderror"
                            id="child_name" wire:model="child_name" placeholder="Name" />
                        @error('child_name')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="child_date_of_birth">Birth date <x-asterisks /> </label>
                        <input type="date" class="form-control @error('child_date_of_birth') is-invalid @enderror"
                            wire:model="child_date_of_birth" placeholder="Birth date"></input>
                        @error('child_date_of_birth')
                            <x-input-error message="{{ $message }}" />
                        @enderror
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
