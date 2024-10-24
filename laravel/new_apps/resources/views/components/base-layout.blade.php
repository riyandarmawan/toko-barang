<!doctype html>
<html class="bg-background-500 font-inter">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />

    {{-- CSS --}}
    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}

    {{-- JS --}}
    @vite('resources/js/app.js')
</body>

</html>
