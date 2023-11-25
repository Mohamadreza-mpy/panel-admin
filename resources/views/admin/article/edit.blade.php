@extends('layouts.admin.master')

@section('content')

    <div class="col-xl-12">
        <!--begin::Contacts-->
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_chat_contacts_header">
                <!--begin::Card title-->
                <div class="card-title">

                    <span class="svg-icon svg-icon-2 mx-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
                        </svg>
                    </span>

                    <h2>ویرایش مقاله</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-5">
                <!--begin::Form-->
                <form id="kt_ecommerce_settings_general_form" method="POST"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ url('admin/articles/update/'. $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @include('admin.article.form')
                    
                </form>
                
            </div>
           
        </div>
        
    </div>


@stop
