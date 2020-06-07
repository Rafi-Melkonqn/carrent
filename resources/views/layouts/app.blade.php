<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel1') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




</head>
<body>
    @include('inc.navbar')

    <div id="app">

        <div class="row" style="background-image:url('../storage/postCrudCar/images/hGWBye.jpg');">

            <div class="col-md-12 ml-5">
                @yield('content')
            </div>
        </div>
{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--            @include('inc.sidebar')--}}
{{--        </main>--}}
    </div>
    <footer id="footer" class="text-center p-3 mb-2 bg-dark text-white">
        <p>Copiright 2019 &copy; Rent a car G&D</p>
    </footer>
</body>
</html>
