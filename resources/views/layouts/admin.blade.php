<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/fonticons/kit.min.css') }}"> 
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">  
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">        
        @include('admin.navigations.navbar')
        @include('admin.navigations.sidebar')
        
        <div class="content-wrapper">
            
                @yield('content')
            
        </div>
        
    </div>
    
    @include('admin.navigations.footer')

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}" defer></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap####.bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script> 
    <!-- Font Awesome Icons -->
    <script src="{{ asset('admin/fonticons/all.min.js') }}" defer></script>    
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}" defer></script>
    
    @yield('scripts') <!-- for future scripts to be added -->
        
</body>
</html>
