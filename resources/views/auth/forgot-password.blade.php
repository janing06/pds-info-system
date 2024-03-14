<x-guest-layout>

	{{-- Section --}}
	<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
		<div class="container">
			<p class="text-center">
				<a href="{{ route('welcome') }}" class="d-flex align-items-center justify-content-center">
					<i class="icon icon-sm me-2 bi bi-arrow-left"></i>
					Back to homepage
				</a>
			</p>
			<div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('img/illustrations/signin.svg') }}">
				<div class="col-12 d-flex align-items-center justify-content-center">
					<div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">

						<div class="mb-4 text-sm text-gray-600">
							{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset
							link that will allow you to choose a new one.') }}
						</div>
					
						{{-- Session Status --}}
						<x-auth-session-status class="alert-success" :status="session('status')" />
					
						<form method="POST" action="{{ route('password.email') }}">
							@csrf
							<div class="mb-4">
								<label for="email">Your Email</label>
								<div class="input-group">
									<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="john@company.com" required autofocus>
									@error('email')
										<x-input-error message="{{ $message }}" />
									@enderror
								</div>
							</div>
							<div class="d-grid">
								<button type="submit" class="btn btn-gray-800">Recover password</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

</x-guest-layout>