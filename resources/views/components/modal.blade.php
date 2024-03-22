<div>
    {{-- modal --}}
    <div class="modal fade" wire:ignore.self data-backdrop="static" data-keyboard="false" id="{{ $modalId }}"
        tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">

                @if ($type === 'delete')
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Confirmation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Delete {{ $label }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow"><i
                                class="bi bi-x-lg"></i> Close </button>
                        @if (isset($livewire))
                            <button wire:click="delete({{ $childId }})" class="btn btn-danger shadow"><i
                                    class="bi bi-check-lg"></i>
                                Delete </button>
                        @else
                            <button id="{{ $buttonId }}" class="btn btn-danger shadow"><i
                                    class="bi bi-check-lg"></i>
                                Delete </button>
                        @endif

                    </div>
                @endif

                @if ($type === 'view')
                    <div class="modal-header">
                        <h5 class="modal-title">Cancel Reason</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="view_cancel_reason">Reason</label>
                                    <textarea disabled name="view_cancel_reason" id="view_cancel_reason" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="view_cancelled_by">Cancelled by</label>
                                    <input type="text" id="view_cancelled_by" name="view_cancelled_by"
                                        class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i
                                class="bi bi-x-lg"></i> Close </button>
                    </div>
                @endif

                @if ($type === 'apply')
                    <div class="modal-header">
                        <h5 class="modal-title">Apply Confirmation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Apply {{ $label }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i
                                class="bi bi-x-lg"></i> Close </button>
                        <button id="{{ $buttonId }}" class="btn btn-outline-info"><i class="bi bi-check-lg"></i>
                            Apply </button>
                    </div>
                @endif

                @if ($type === 'cancel')
                    <div class="modal-header">
                        <h5 class="modal-title">Request for Cancellation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <form id="{{ $formId }}" action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="cancel_reason">Reason
                                            <x-asterisks />
                                        </label>
                                        <textarea name="cancel_reason" id="cancel_reason" cols="30" rows="2" class="form-control"
                                            placeholder="Reason for waybill cancellation"></textarea>
                                        <span id="cancel_reason_error" class="" role="alert"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i
                                class="bi bi-x-lg"></i> Close </button>
                        <button id="{{ $buttonId }}" class="btn btn-outline-danger"><i class="bi bi-check-lg"></i>
                            Confirm </button>
                    </div>
                @endif

                @if ($type === 'revert')
                    <div class="modal-header">
                        <h5 class="modal-title">Revert Confirmation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Revert {{ $label }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i
                                class="bi bi-x-lg"></i> Close </button>
                        <button id="{{ $buttonId }}" class="btn btn-outline-danger"><i
                                class="bi bi-check-lg"></i> Revert </button>
                    </div>
                @endif

                @if ($type === 'approve')
                    <div class="modal-header">
                        <h5 class="modal-title">Approve Confirmation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <form id="{{ $formId }}" action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="approved_cancel_reason">Reason
                                            <x-asterisks />
                                        </label>
                                        <textarea name="approved_cancel_reason" id="approved_cancel_reason" cols="30" rows="2"
                                            class="form-control" placeholder="Reason for waybill cancellation approval"></textarea>
                                        <span id="approved_cancel_reason_error" class="" role="alert"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i
                                class="bi bi-x-lg"></i> Close </button>
                        <button id="{{ $buttonId }}" class="btn btn-outline-info"><i class="bi bi-check-lg"></i>
                            Confirm </button>
                    </div>
                @endif

                @if ($type === 'activate')
                    <div class="modal-header">
                        <h5 class="modal-title">Activation Confirmation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Activate {{ $label }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow-sm"><i
                                class="bi bi-x-lg"></i> Close </button>
                        <button id="{{ $buttonId }}" class="btn btn-success text-white"><i
                                class="bi bi-check-lg"></i>
                            Activate </button>
                    </div>
                @endif

                @if ($type === 'deactivate')
                    <div class="modal-header">
                        <h5 class="modal-title">Deactivation Confirmation</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Deactivate {{ $label }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow-sm"><i
                                class="bi bi-x-lg"></i> Close </button>
                        <button id="{{ $buttonId }}" class="btn btn-danger"><i class="bi bi-check-lg"></i>
                            Deactivate </button>
                    </div>
                @endif

                @if ($type === 'add-child')
                    <div class="modal-header">
                        <h5 class="modal-title">Add Child</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group mb-3">
                                <label for="mother_surname">Name
                                    <x-asterisks />
                                </label>
                                <input type="text" wire:model="child_name" id="child_name" name="child_name"
                                    class="form-control @error('child_name') is-invalid @enderror" placeholder="Name"
                                    value="" required>
                                @error('child_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="child_date_of_birth">Birth Date
                                    <x-asterisks />
                                </label>
                                <input type="date" wire:model="child_date_of_birth" id="child_date_of_birth"
                                    name="child_date_of_birth"
                                    class="form-control @error('child_date_of_birth') is-invalid @enderror"
                                    value="" required>
                                @error('child_date_of_birth')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="text-end">
                                <button type="submit" wire:click.prevent="cancel" class="btn btn-white shadow-sm"><i
                                        class="bi bi-x-lg"></i>
                                    Cancel</button>
                                <button type="submit" wire:click.prevent="createChild" class="btn btn-primary"><i
                                        class="bi bi-check-lg"></i>
                                    Add</button>
                            </div>
                        </form>
                    </div>
                @endif

                @if ($type === 'update-child')
                    <div class="modal-header">
                        <h5 class="modal-title">Update Child</h5>
                        <span class="pull-right">
                            <img class="spinner" src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group mb-3">
                                <label for="mother_surname">Name
                                    <x-asterisks />
                                </label>
                                <input type="text" wire:model="child_name" id="child_name" name="child_name"
                                    class="form-control @error('child_name') is-invalid @enderror" placeholder="Name"
                                    value="" required>
                                @error('child_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="child_date_of_birth">Birth Date
                                    <x-asterisks />
                                </label>
                                <input type="date" wire:model="child_date_of_birth" id="child_date_of_birth"
                                    name="child_date_of_birth"
                                    class="form-control @error('child_date_of_birth') is-invalid @enderror"
                                    required>
                                @error('child_date_of_birth')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                            <div class="text-end">
                                <button type="submit" wire:click.prevent="cancel" class="btn btn-white shadow-sm"><i
                                        class="bi bi-x-lg"></i>
                                    Cancel</button>
                                <button type="submit" wire:click.prevent="createChild" class="btn btn-primary"><i
                                        class="bi bi-check-lg"></i>
                                    Add</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>
