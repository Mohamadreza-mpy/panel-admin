<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

    <div class="col-6">

        <div class="fv-row mb-7 fv-plugins-icon-container">

            <label class="fs-6 fw-semibold form-label mt-3">
                <span class="required">عنوان</span>
            </label>

            <input type="text" class="form-control form-control-solid" name="title" value="@if(isset($data)) {{ $data->title }}@else{{old('title')}}@endif">

            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

    </div>
    <div class="col-6">

        <div class="fv-row mb-7 fv-plugins-icon-container">

            <label class="fs-6 fw-semibold form-label mt-3">
                <span class="required">دسته بندی</span>
            </label>

            <select name="category_id" class="form-select" aria-label="Default select example">
                <option disabled selected>دسته بندی</option>
                @foreach ($categoryArticles as $catarticle)
                    <option @if(isset($data) && $catarticle->id == $data->category_id) selected @endif value="{{ $catarticle->id }}">{{ $catarticle->title }}</option>
                @endforeach


            </select>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>


    </div>



</div>





    <label class="fs-6 fw-semibold form-label mt-3">
        <span class="required">توضیحات</span>

    </label>

    <textarea class="form-control form-control-solid ckeditor" rows="5" name="description">@if(isset($data)) {{ $data->description }}@else{{old('description')}}@endif</textarea>




<div class="separator mb-6"></div>


<div class="d-flex justify-content-end">

    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
        <span class="indicator-label">ذخیره</span>
    </button>
    <!--end::Button-->
</div>
