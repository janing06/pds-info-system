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
							{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
						</div>
					
						@if (session('status') === 'verification-link-sent')
							<x-auth-session-status class="alert-success" :status="'A new verification link has been sent to the email address you provided during registration.'" />
						@endif
						{{-- Session Status --}}
					
						<form method="POST" action="{{ route('verification.send') }}">
							@csrf
					
							<div class="d-grid mb-3">
								<button type="submit" class="btn btn-gray-800">Resend Verification Email</button>
							</div>
						</form>
						<form method="POST" action="{{ route('logout') }}">
							@csrf
					
							<button type="submit" class="btn btn-gray-200">Log Out</button>
					
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

</x-guest-layout>
