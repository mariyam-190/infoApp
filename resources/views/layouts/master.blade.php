<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
 <!--Summer Note css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<style>
    div.dataTables_wrapper div.dataTables_length select {
    width: 50%;
}
</style>
</head>
<body>
@include('layouts.inc.admin-navbar')
<div id="layoutSidenav">
@include('layouts.inc.admin-sidebar')
<div id="layoutSidenav_content">
                <main>
                    @yield('content')
</main>
@include('layouts.inc.admin-footer')
</div>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}" ></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('assets/js/script.js') }}" ></script>


<!--Summer Note js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $("#mySummernote").summernote({
            height:300,
        });
        $('.dropdown-toggle').dropdown();
    });
</script>

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myDataTable').DataTable();
} );
</script>
</body>
</html>
