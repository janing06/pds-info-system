<div>
  {{-- modal --}}
  <div class="modal fade" data-backdrop="static" data-keyboard="false" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-hidden="true">
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
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $buttonId }}" class="btn btn-outline-danger"><i class="bi bi-check-lg"></i> Delete </button>
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
									<input type="text" id="view_cancelled_by" name="view_cancelled_by" class="form-control" disabled>
								</div>
							</div>
						</div>
          </div>
          <div class="modal-footer">
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
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
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button  id="{{ $buttonId }}" class="btn btn-outline-info"><i class="bi bi-check-lg"></i> Apply </button>
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
										<textarea name="cancel_reason" id="cancel_reason" cols="30" rows="2" class="form-control" placeholder="Reason for waybill cancellation"></textarea>
										<span id="cancel_reason_error" class="" role="alert" ></span>
									</div>
								</div>
							</div>
						</form>
          </div>
          <div class="modal-footer">
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $buttonId }}" class="btn btn-outline-danger"><i class="bi bi-check-lg"></i> Confirm </button>
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
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $buttonId }}" class="btn btn-outline-danger"><i class="bi bi-check-lg"></i> Revert </button>
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
										<textarea name="approved_cancel_reason" id="approved_cancel_reason" cols="30" rows="2" class="form-control" placeholder="Reason for waybill cancellation approval"></textarea>
										<span id="approved_cancel_reason_error" class="" role="alert" ></span>
									</div>
								</div>
							</div>
						</form>
          </div>
          <div class="modal-footer">
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $buttonId }}" class="btn btn-outline-info"><i class="bi bi-check-lg"></i> Confirm </button>
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
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $buttonId }}" class="btn btn-outline-info"><i class="bi bi-check-lg"></i> Activate </button>
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
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $buttonId }}" class="btn btn-outline-tertiary"><i class="bi bi-check-lg"></i> Deactivate </button>
          </div>
        @endif

      </div>
    </div>
  </div>

</div>