<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('layouts.admin.blocks.head')


<body class="g-sidenav-show rtl bg-gray-100">
@include('layouts.admin.blocks.sidbar')


@yield('content')


@include('layouts.admin.blocks.script')
</body>

</html>
