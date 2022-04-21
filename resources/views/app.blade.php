<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing-layouts.head')
</head>

<body>
    <header class="foi-header">
        <div class="container">
            @include('landing-layouts.nav')
        </div>
    </header>



    <main class="page-about">
        <div class="container">
            <section class="page-header">
                @yield('containt')
    </main>


    <footer class="foi-footer text-white">

        @include('landing-layouts\footer')

    </footer>


    <script src="{{ asset('landing-assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing-assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('landing-assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</body>

</html>
