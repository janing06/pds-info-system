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

    <title>{{ config('app.name') }} @yield('title', '')</title>

    {{-- Favicons --}}

    {{-- Theme CSS --}}
    <link type="text/css" href="{{ asset('css/theme/admin/volt.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/theme/admin/custom.css') }}" rel="stylesheet">

    {{-- Bootstrap icons --}}
    <link type="text/css" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    {{-- Fontawesome icons --}}
    <link type="text/css" href="{{ asset('vendor/fontawesome-free-6/css/all.min.css') }}" rel="stylesheet">

    {{-- datatable --}}
    <link type="text/css" rel="stylesheet"
        href="{{ asset('vendor/bootstrap-datatables/bootstrap-datatable.min.css') }}">

    {{-- bootstrap-select --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/bootstrap-select/bootstrap-select.min.css') }}">

    {{-- datepicker --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/vanillajs-datepicker/datepicker-bs5.min.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- glightbox --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/glightbox/glightbox.min.css') }}">

    {{-- tempus dominus --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('vendor/tempus-dominus/tempus-dominus.min.css') }}">

    {{-- page specific css --}}
    @stack('styles')

    @livewireStyles

</head>

<body>

    @include('layouts.partials.admin.sidebar')

    <main class="content">

        @include('layouts.partials.admin.navbar')

        {{-- page content --}}
        {{ $slot }}

        {{-- footer --}}
        @include('layouts.partials.admin.footer')

    </main>


    {{-- popper for dropdowns --}}
    <script src="{{ asset('vendor/@popperjs/popper.min.js') }}"></script>

    {{-- jquery --}}
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- bootstrap --}}
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

    {{-- datatables --}}
    <script type="text/javascript" src="{{ asset('vendor/bootstrap-datatables/jquery.datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/bootstrap-datatables/bootstrap-datatables.min.js') }}"></script>

    {{-- sweet alert --}}
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @include('sweetalert::alert')

    {{-- Smooth scroll --}}
    <script src="{{ asset('vendor/smooth-scroll/smooth-scroll.min.js') }}"></script>

    {{-- datepicker --}}
    <script src="{{ asset('vendor/vanillajs-datepicker/datepicker.min.js') }}"></script>

    {{-- bootstrap-select --}}
    <script type="text/javascript" src="{{ asset('vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>



    {{-- glightbox --}}
    <script type="text/javascript" src="{{ asset('vendor/glightbox/glightbox.min.js') }}"></script>

    {{-- tempus dominus --}}
    <script type="text/javascript" src="{{ asset('vendor/tempus-dominus/tempus-dominus.min.js') }}"></script>

    {{-- Volt JS --}}
    <script src="{{ asset('js/theme/admin/volt.js') }}"></script>
    <script src="{{ asset('js/theme/admin/custom.js') }}"></script>

    {{-- page specific js files --}}
    @stack('scripts')

    @livewireScripts



</body>

</html>
