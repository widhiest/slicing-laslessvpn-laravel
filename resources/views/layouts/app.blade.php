<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Slicing Figma')</title>

    {{-- font awesome --}}
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        integrity="sha512-..." crossorigin="anonymous" 
    />

    {{-- Vite --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    {{-- Header --}}
    @include('layouts.header')

    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>