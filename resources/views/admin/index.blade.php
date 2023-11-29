@extends('layouts.admin.master')

@section('content')

    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-xl-6">

            <div class="card card-flush bgi-no-repeat bgi-size-contain align-items-center"
                 style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                <div class="card-body d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6">0</span>
                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">تعداد درخواست های مشاوره و خرید</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-6">

            <div class="card card-flush bgi-no-repeat bgi-size-contain align-items-center"
                 style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">



                <div class="card-body d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6">0</span>
                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">تعداد دوره ها</span>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <hr>



{{--    <div class="row g-5 g-xl-8">--}}
{{--        <div class="col-xl-6">--}}
{{--            <div class="card card-xl-stretch mb-5 mb-xl-8">--}}

{{--                <div class="card-header border-0 pt-5 align-items-center">--}}
{{--                    <h3 class="card-title align-items-start flex-column">--}}
{{--                        <span class="card-label fw-bold fs-3 mb-1">درخواست خرید دوره</span>--}}

{{--                    </h3>--}}
{{--                </div>--}}

{{--                <div class="card-body py-3">--}}
{{--                    <div class="tab-content">--}}
{{--                        <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1" role="tabpanel">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">--}}
{{--                                    <thead>--}}
{{--                                    <tr class="fw-bold text-muted">--}}
{{--                                        <th class="min-w-200px">نام</th>--}}
{{--                                        <th class="min-w-150px">شماره تماس</th>--}}

{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}

{{--                                    @foreach ($requests_cours as $request)--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}

{{--                                                    <div class="d-flex justify-content-start flex-column">--}}
{{--                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $request->name }}</a>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ @$request->number }}</a>--}}
{{--                                            </td>--}}


{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                    <!--end::Table body-->--}}
{{--                                </table>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="col-xl-6">--}}
{{--            <div class="card card-xl-stretch mb-5 mb-xl-8">--}}

{{--                <div class="card-header border-0 pt-5">--}}
{{--                    <h3 class="card-title align-items-start flex-column">--}}
{{--                        <span class="card-label fw-bold fs-3 mb-1">درخواست رزرو مشاوره</span>--}}
{{--                    </h3>--}}
{{--                </div>--}}

{{--                <div class="card-body py-3">--}}
{{--                    <div class="tab-content">--}}
{{--                        <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1" role="tabpanel">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">--}}
{{--                                    <thead>--}}
{{--                                    <tr class="fw-bold text-muted">--}}
{{--                                        <th class="min-w-200px">نام</th>--}}
{{--                                        <th class="min-w-150px">شماره تماس</th>--}}
{{--                                        <th class="min-w-150px">درخواست</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach ($requests_coun as $request)--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}

{{--                                                    <div class="d-flex justify-content-start flex-column">--}}
{{--                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $request->name }}</a>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ @$request->number }}</a>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{@$request->id}}" class="text-dark fw-bold text-hover-primary fs-6">{{ Illuminate\Support\Str::limit(@$request['description'], 10, $end='...')}}--}}
{{--                                                    <div class="modal fade" id="exampleModal{{@$request->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header">--}}
{{--                                                                    <h3>شرح درخواست</h3>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-dialog ">--}}
{{--                                                                    {{@$request->description}}--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-footer">--}}
{{--                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                    <!--end::Table body-->--}}
{{--                                </table>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="card mb-5 mb-xl-8">--}}

{{--        <div class="card-header border-0 pt-5">--}}
{{--            <h3 class="card-title align-items-start flex-column">--}}
{{--                <span class="card-label fw-bold fs-3 mb-1">تماس با ما</span>--}}
{{--            </h3>--}}
{{--            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"--}}
{{--                 data-kt-initialized="1">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-body py-3">--}}
{{--            <div class="table-responsive">--}}
{{--                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">--}}
{{--                    <thead>--}}
{{--                    <tr class="fw-bold text-muted">--}}
{{--                        <th class="min-w-200px">نام</th>--}}
{{--                        <th class="min-w-150px">شماره تماس</th>--}}
{{--                        <th class="min-w-150px">درخواست</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach ($contacts as $contacts)--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <div class="d-flex align-items-center">--}}

{{--                                    <div class="d-flex justify-content-start flex-column">--}}
{{--                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $contacts->name }}</a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">{{ @$contacts->number }}</a>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{@$contacts->id}}" class="text-dark fw-bold text-hover-primary fs-6">{{ Illuminate\Support\Str::limit(@$contacts['description'], 10, $end='...')}}--}}
{{--                                    <div class="modal fade" id="exampleModal{{@$contacts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                            <div class="modal-content">--}}
{{--                                                <div class="modal-header">--}}
{{--                                                    <h3>شرح درخواست</h3>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-dialog ">--}}
{{--                                                    {{@$contacts->description}}--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-footer">--}}
{{--                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                    <!--end::Table body-->--}}
{{--                </table>--}}
{{--                <!--end::Table-->--}}
{{--            </div>--}}
{{--            <!--end::Table container-->--}}
{{--        </div>--}}
{{--        <!--begin::Body-->--}}
{{--    </div>--}}








@stop
