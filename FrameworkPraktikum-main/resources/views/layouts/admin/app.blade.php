<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('judul')</title>

    {{-- Include CSS --}}
    @include('layouts.admin.css')
</head>
<body>

    {{-- Sidebar --}}
    @include('layouts.admin.sidebar')

    <main class="content">
        {{-- Header --}}
        @include('layouts.admin.header')

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('layouts.admin.footer')
    </main>

    {{-- JS --}}
    @include('layouts.admin.js')
</body>
</html>
