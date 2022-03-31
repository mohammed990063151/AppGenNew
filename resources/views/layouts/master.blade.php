<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    @include('layouts.includes.style')
    @yield('style')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('layouts.includes.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.includes.nav')
        @yield('content')
        @include('layouts.includes.footer')
        @include('layouts.includes.scripts')
        </div>
    </main>
</body>

</html>
