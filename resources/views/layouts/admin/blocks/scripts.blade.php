
<script>
    var hostUrl = "assets/";
</script>

<script src="{{ asset('assets/admin/cheakurl.js') }}"></script>
@if(Request::segment(2) != 'consultants' && Request::segment(2) != 'departmans')
<script src="{{ asset('assets/dashboard/js/plugins.bundle.js') }}"></script>
@endif
<script src="{{asset('assets/admin/vue.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>\
<script src="{{ asset('assets/dashboard/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/fullcalendar.bundle.js') }}"></script>
<script src="{{asset('assets/dashboard/js/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/admin/date/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/admin/date/bootstrap-datepicker.fa.min.js')}}"></script>
<script>
    var cks = document.getElementsByClassName('ckeditor');
    Array.from(cks).forEach((el) => {
        // console.log(el)
        CKEDITOR.replace(el, {
            language: 'fa',
            content: 'fa',

            {{--filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",--}}
            {{--filebrowserUploadMethod: 'form'--}}
        });
    });
</script>

@yield('bottom_scripts')

@include('layouts.admin.blocks.vue')
