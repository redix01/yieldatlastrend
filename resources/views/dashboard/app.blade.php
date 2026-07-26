@php
    $siteSettings = \App\Support\SiteSettings::get();
    $brandName = config('app.name');
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-brand="{{ $brandName }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title inertia>{{ $brandName }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        @vite(['src/app.tsx'], 'build/dashboard')
        @inertiaHead
    </head>
    <body class="min-h-screen bg-[#050505] text-white antialiased">
        @inertia
    </body>
</html>
