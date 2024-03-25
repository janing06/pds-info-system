<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $eligibility ? 'Update' : 'Add' }} Eligibility</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $eligibility ? 'updateEligibility' : 'createNewEligibility' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="career_service">Career Service <x-asterisks /> </label>
                        <input type="text" wire:model="career_service"
                            class="form-control @error('career_service') is-invalid @enderror" id="career_service"
                            placeholder="Career Service" />
                        @error('career_service')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="rating">Rating <x-asterisks /> </label>
                        <input type="number" wire:model="rating" max="10" min="0" value="0"
                            class="form-control @error('rating') is-invalid @enderror" placeholder="Rating">
                        @error('rating')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="examination_date">Examination Date <x-asterisks /> </label>
                        <input type="date" wire:model="examination_date" max="{{ date('Y-m-d', time()) }}"
                            class="form-control @error('examination_date') is-invalid @enderror" id="examination_date"
                            placeholder="Career Service" />
                        @error('examination_date')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="examination_place">Examination Place <x-asterisks /> </label>
                        <input type="text" wire:model="examination_place"
                            class="form-control @error('examination_place') is-invalid @enderror" id="examination_place"
                            placeholder="Examination Place" />
                        @error('examination_place')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="license_number">License Number <x-asterisks /> </label>
                        <input type="text" wire:model="license_number"
                            class="form-control @error('license_number') is-invalid @enderror" id="license_number"
                            placeholder="Examination Place" />
                        @error('license_number')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="license_validity_date">License Validity (if applicable)<x-asterisks /> </label>
                        <input type="date" wire:model="license_validity_date"
                            class="form-control @error('license_validity_date') is-invalid @enderror"
                            id="license_validity_date" placeholder="Examination Place" />
                        @error('license_validity_date')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close</button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> Save
            </button>
        </div>
    </form>
</div>
