<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Assess - {{ env('APP_NAME') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script>
            var mediumPermalinkBase = '{{ route('welcome-start-with', ['name' => '']) . '/' }}';
            var mode = 'assess';
            var viewer = '{{ Auth::guest() ? 'guest' : '' }}';
        </script>
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/clipboard.min.js') }}"></script>
        <script src="{{ asset('js/hammer.min.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>