<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- . '?version=' . Str::random() no permite que las urls se guarden en cache NO PRODUCCION --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') . '?version=' . Str::random() }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') . '?version=' . Str::random() }}" defer></script>

        {{-- Imagen para utilizar de background --}}
        <style>
            .imagen {
                background-image: url("{{ asset('img/coding-man.jpg') }}");
                height: 400px;
                width: 400px;
                margin-left: auto;
                margin-right: auto;
            }
            .imagen1 {
                background-image: url("{{ asset('img/beautiful-pet-portrait-of-dog.jpg') }}");
                height: 400px;
                width: 900px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
