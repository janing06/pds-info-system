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

						<form method="POST" action="{{ route('password.store') }}">
							@csrf
					
							{{-- Password Reset Token --}}
							<input type="hidden" name="token" value="{{ $request->route('token') }}">
					
							<div class="mb-4">
								<label for="email">Email
									<x-asterisks />
								</label>
								<div class="input-group">
									<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
									@error('email')
									<x-input-error message="{{ $message }}" />
									@enderror
								</div>
							</div>
							<div class="mb-4">
								<label for="password">Password
									<x-asterisks />
								</label>
								<div class="input-group">
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="new-password">
									@error('password')
										<x-input-error message="{{ $message }}" />
									@enderror
								</div>
							</div>
							<div class="mb-4">
								<label for="password_confirmation">Confirm Password
									<x-asterisks />
								</label>
								<div class="input-group">
									<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required autocomplete="new-password">
								</div>
							</div>
					
							<div class="flex items-center justify-end mt-4">
								<button type="submit" class="btn btn-gray-800">Recover password</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

</x-guest-layout>