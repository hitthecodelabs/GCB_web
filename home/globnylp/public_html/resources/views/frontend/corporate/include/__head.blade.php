<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ url()->current() }}"/>
    <link rel="shortcut icon" href="{{ asset(setting('site_favicon','global')) }}" type="image/x-icon"/>
    <link rel="icon" href="{{ asset(setting('site_favicon','global')) }}" type="image/x-icon" />

    <!-- Google Fonts: Poppins (a単adido) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS del tema -->
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/odometer-default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme-2/css/styles.css') }}">

    <!-- Hoja de Estilos Principal de GCB Theme -->
    <link rel="stylesheet" href="{{ asset('gcb_theme/css/main.css') }}" />
    
    {{-- Desactivado: bundle anterior
    @php
      $jsFile = 'assets/gcb_theme/js/main.min.js';
      $jsVer  = file_exists(public_path($jsFile)) ? filemtime(public_path($jsFile)) : time();
    @endphp
    <script src="{{ asset($jsFile) }}?v={{ $jsVer }}" defer></script>
    --}}

    {{-- NUEVO: toggle del off-canvas del header --}}
    <script src="{{ asset('gcb_theme/js/offcanvas.js') }}?v={{ time() }}" defer></script>


    @stack('style')
    @yield('style')

    <!-- Custom CSS desde BD -->
    <style>
      {{ \App\Models\CustomCss::first()->css }}
    </style>

    <title>{{ setting('site_title', 'global') }} - @yield('title')</title>
</head>
