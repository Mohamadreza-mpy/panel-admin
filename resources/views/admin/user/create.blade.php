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
                            <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                        </svg>
                    </span>     
                    <h2>افزودن کاربر</h2>
                </div>
            </div>
            
            <div class="card-body pt-5">
                
                <form id="kt_ecommerce_settings_general_form" method="POST"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ url('admin/users/store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('admin.user.form')
                </form>
                
            </div>
           
        </div>
        
    </div>


@stop
