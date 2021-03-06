<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('ogani/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('ogani/css/style.css') }}" type="text/css">
    @show

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    @include('inc.humberger')
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('inc.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('inc.hero-section')
    <!-- Hero Section End -->

    @yield('main')

    <!-- Footer Section Begin -->
    @include('inc.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @section('js')
        <script src="{{ asset('ogani/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('ogani/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ogani/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('ogani/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('ogani/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('ogani/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('ogani/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('ogani/js/main.js') }}"></script>
    @show

</body>

</html>
