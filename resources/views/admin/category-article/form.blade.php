
{{--<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">--}}

    <div class="col-12">

        <div class="fv-row mb-7 fv-plugins-icon-container">

            <label class="fs-6 fw-semibold form-label mt-3">
                <span class="required">عنوان</span>
            </label>

            <input type="text" class="form-control form-control-solid" name="title" value="@if(isset($data)) {{ $data->title }} @else{{old('title')}}@endif">

            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>




{{--    </div>--}}

{{--    <div class="col">--}}

{{--        <div class="fv-row mb-7">--}}

{{--            <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                <span class="required">توضیحات کوتاه</span>--}}
{{--            </label>--}}

{{--            <textarea class="form-control form-control-solid" rows="3" name="little_description">@if(isset($data)) {{$data->little_description}} @else{{old('little_description')}}@endif</textarea>--}}
{{--            --}}
{{--        </div>--}}
{{--        --}}
{{--    </div>--}}

</div>


{{--<div class="row row-clos-1 row-clos-sm-2 rol-clos-md-1 row-clos-lg-2">--}}
{{--    <div class="col">--}}
{{--        <div class="fv-row mb-7 fv-plugins-icon-container">--}}
{{--            <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                <span class="required">عکس</span>--}}

{{--            </label>--}}

{{--            <input type="file" class="form-control form-control-solid" name="image" value="">--}}
{{--            <div class="fv-plugins-message-container invalid-feedback"></div>--}}
{{--            @if (isset($data))--}}
{{--            <img src="{{ asset('assets/uploads/'.$data->image) }}" width="120px" alt="">--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col">--}}

{{--        <div class="fv-row mb-7">--}}

{{--            <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                <span class="required">آدرس صفحه</span>--}}
{{--            </label>--}}
{{--    --}}
{{--            <input type="text" class="form-control form-control-solid" oninput="check()" id="url" name="url" value="@if(isset($data)) {{ $data->url }}  @else{{old('url')}}@endif">--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

{{--    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">--}}

{{--    <div class="col">--}}

{{--        <div class="fv-row mb-7 fv-plugins-icon-container">--}}

{{--            <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                <span>عنوان سئو</span>--}}

{{--            </label>--}}

{{--            <input type="text" class="form-control form-control-solid" name="seo_title" value="@if(isset($data)) {{ $data->seo_title }} @else  {{ old('seo_title') }} @endif">--}}

{{--            <div class="fv-plugins-message-container invalid-feedback"></div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div class="col">--}}

{{--        <div class="fv-row mb-7">--}}

{{--            <label class="fs-6 fw-semibold form-label mt-3">--}}
{{--                <span>توضیحات سئو</span>--}}
{{--            </label>--}}

{{--            <textarea class="form-control form-control-solid" rows="3" name="soe_description">@if(isset($data)) {{$data->soe_description}} @else {{ old('soe_description') }} @endif</textarea>--}}
{{--            <!--end::Input-->--}}
{{--        </div>--}}
{{--        <!--end::Input group-->--}}
{{--    </div>--}}

{{--</div>--}}

<div class="fv-row mb-7">

    <label class="fs-6 fw-semibold form-label mt-3">
        <span class="required">توضیحات</span>

    </label>

    <textarea class="form-control form-control-solid ckeditor" rows="5" name="description">@if(isset($data)) {{ $data->description }} @else{{old('description')}}@endif</textarea>

</div>

<div class="separator mb-6"></div>


<div class="d-flex justify-content-end">

    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
        <span class="indicator-label">ذخیره</span>
    </button>
    <!--end::Button-->
</div>
