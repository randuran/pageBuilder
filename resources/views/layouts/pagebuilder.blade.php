<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div x-data="{slideOver: false}">
        <div>
            @auth
                <x-builder.topbar />

            @endauth
            @livewire('navbar')
        </div>
        <div>
            @livewire('sidebar')
        </div>
        <main>
            {{ $slot }}
        </main>
        <div>
            @auth
                <x-builder-mode />
                <x-builder-notify />
            @endauth
        </div>
    </div>
    @livewireScripts

</body>

</html>
