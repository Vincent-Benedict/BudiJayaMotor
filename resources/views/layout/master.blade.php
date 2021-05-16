<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    {{--    JQuery --}}
    <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>

    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <meta name="csrf-token" content="{{csrf_token()}}">

    @yield('extra-css')

    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    {{--    style for blocking    --}}
    <link rel="stylesheet" href="{{asset('css/minor_style.css')}}">


    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>

    @include('components.header')


    @yield('content')


    @include('components.footer')


    {{--  script  --}}
    @include('components.ajax_search_script')
    @include('components.auth_script')

</body>
</html>
