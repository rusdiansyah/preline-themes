<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-layouts.style />
    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="w-full max-w-md mx-auto h-screen flex justify-center items-center bg-gray-50 dark:bg-neutral-900">

    <div class="container w-full mt-7">
        {{ $slot }}
    </div>


    @livewireScripts
    <x-layouts.script />
</body>

</html>
