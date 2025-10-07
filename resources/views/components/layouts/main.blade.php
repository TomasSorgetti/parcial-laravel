<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="description" content="{{ $description ?? '' }}">
    <title>{{ $title ?? 'Constructly' }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style></style>
    @endif
</head>

<body>
    <x-navbar />

    <main class="min-h-[70vh]">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>