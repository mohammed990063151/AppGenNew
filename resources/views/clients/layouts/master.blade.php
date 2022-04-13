<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('clients.layouts.head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('clients.layouts.main-header')
@include('clients.layouts.main-sidebar')

@yield('content')

@include('clients.layouts.footer')


</div>
<!-- ./wrapper -->
@include('clients.layouts.footer-scripts')

</body>
</html>
