<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', 'لاگین')</title>
        <link href="{{ asset('assets/dashboard/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/dashboard/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/iran.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/datatable_dark.css') }}"
            id="style1" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">

    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('{{ asset('assets/admin/images/bg7.jpg') }}');
            }


        </style>

        <div class="d-flex flex-column flex-column-fluid flex-lg-row">

            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">

                <div class="d-flex flex-center flex-lg-start flex-column">

                    <a class="mb-7">
                        <img alt="Logo" src="{{ asset('assets/admin/images/rahweb.jpg') }}">
                    </a>

                </div>

            </div>

            <div class="d-flex flex-center w-lg-50 p-10">
                <!--begin::Card-->
                <div class="card rounded-3 w-md-550px">
                    <!--begin::Card body-->
                    <div class="card-body p-10 p-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                            id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" action="{{route('admin.auth')}}" method="POST">

                            @csrf

                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">ورود به پنل ادمین</h1>
                            </div>



                            <div class="fv-row mb-8 fv-plugins-icon-container">

                                <input type="text" placeholder="ایمیل" name="email" autocomplete="off"
                                    class="form-control bg-transparent" style="text-align: right;">

                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>

                            <div class="fv-row mb-3 fv-plugins-icon-container">

                                <input type="password" placeholder="رمز عبور" name="password" autocomplete="off"
                                    class="form-control bg-transparent" style="text-align: right;">

                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>


                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-danger">

                                    <span class="indicator-label">ورود</span>


                                </button>
                            </div>

                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>
