<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/base.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/utilities.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/hero.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/navbar.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/footer.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/support-widget.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/modal.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/team.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/components/forms.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @stack('styles')
</head>
<body>
    @include('layouts.guest.header')
    @include('includes.partials.alerts')
    @yield('content')

    @include('layouts.guest.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets/js/scripts.js') }}"></script>

    @stack('scripts')
</body>
</html>
