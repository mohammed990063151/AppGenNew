<!DOCTYPE html>

<html lang="en" dir='{{getclass(['ar'=>'rtl','en'=>'ltr'])}}'>             

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    
        <title>
            @yield('title')
        </title>
        <!--     Fonts and icons     -->
        @include('layouts.includes.style')
        @yield('style')
        @include('notify::components.notify')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    </head>
    
    <body class="g-sidenav-show bg-gray-100 {{getclass(['ar'=>'rtl','en'=>''])}} "  style="font-family: system:ui">
    
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
    {{-- dir="rtl" --}}

<html lang="en" dir="rtl">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    @include('layouts.includes.style')
    @yield('style')
    @include('notify::components.notify')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="g-sidenav-show  rtl bg-gray-100"  style="font-family: system:ui">

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
