<head>
    <title>@yield('title', 'پنل مدیریت')</title>
    <link rel="stylesheet" href="{{ asset('assets/site/css/bootstrap.rtl.css') }}" />
    <link href="{{ asset('assets/dashboard/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dashboard/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/iran.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/datatable_dark.css') }}"
        id="style1" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{asset('assets/admin/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/jquery/jquery-ui.min.js')}}"></script>
    
    {{-- @yield('style')
    @yield('top_script') --}}

    @yield('css')



</head>
