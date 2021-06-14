<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MRES') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('media/image/favicon.png')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('vendors/bundle.css')}}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}" type="text/css">
</head>
<body >
<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

            @yield('content')

    <!-- Plugin scripts -->
<script src="{{asset('vendors/bundle.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('js/app.min.js')}}"></script>
</body>
</html>
