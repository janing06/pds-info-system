<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta content="{{ config('app.name') }}" name="description">
		<meta content="{{ config('app.name') }}" name="keywords">
		<meta name="author" content="Kenneth Santianez">
		<meta name="robots" content="noindex">

		<title>{{ config('app.name') }}</title>

		{{-- Favicons --}}

		{{-- Volt CSS --}}
		<link type="text/css" href="{{ asset('css/theme/admin/volt.css') }}" rel="stylesheet">

		{{-- Bootstrap icons --}}
		<link type="text/css" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
			
	</head>

	<body>

		<main>

			{{ $slot }}

		</main>
		
		{{-- Core --}}
		<script src="{{ asset('vendor/@popperjs/popper.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

		{{-- Smooth scroll --}}
		<script src="{{ asset('vendor/smooth-scroll/smooth-scroll.min.js') }}"></script>

		{{-- Volt JS --}}
		<script src="{{ asset('js/theme/admin/volt.js') }}"></script>

		{{-- page specific js files --}}
		@stack('scripts')

	</body>

</html>