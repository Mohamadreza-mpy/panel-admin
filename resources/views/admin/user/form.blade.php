<div class="card-body border-top p-9">
    <div class="row w-100 m-0">

        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">نام و نام خانوادگی</label>
            <input type="text" name="fullname"
            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
            placeholder="نام و نام خانوادگی"
            value="@if (isset($data)) {{ $data->name }} @endif">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        @dd($data->roles)
        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">سطح دسترسی</label>

            <select name="group" class="form-select" aria-label="Default select example">
                <option selected>سطح دسترسی</option>
                @foreach (@$roles as $role)

                    <option @if(isset($data) && $data->roles[0]->id == $role->id) selected @endif value="{{ $role->id }}">{{ $role->title }}</option>
                @endforeach
              </select>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">ایمیل</label>
            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
            value="@if (isset($data)) {{ $data->email }} @endif">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label fw-semibold fs-6">عکس</label>
            <input type="file" name="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
            placeholder="First name" value="@if (isset($data)) {{ $data->image }} @endif">
            <div class="fv-plugins-message-container invalid-feedback"></div>
            @if (isset($data))
            <img class="rounded-circle" src="{{ asset('assets/uploads/' . $data->image) }}" style="width: 130px"
                alt="">
        @endif
        </div>
        <div class="col-md-4 p-2">
            <label class=" col-form-label fw-semibold fs-6">
                <span class="required">رمز عبور</span>
            </label>
            <input type="password" name="password" class="form-control form-control-lg form-control-solid">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-4 p-2">
            <label class=" col-form-label fw-semibold fs-6">
                <span class="required">تکرار رمز عبور</span>
            </label>
            <input type="password" name="conpassword" class="form-control form-control-lg form-control-solid"
            value="">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">ذخیره</button>
        </div>
    </div>
    {{-- <div class="row mb-6">


        <div class="col-lg-6 fv-row fv-plugins-icon-container">

        </div>


    </div>

    <div class="row mb-6">


        <div class="col-lg-5">

            <div class="row">

                <div class="col-lg-9 fv-row fv-plugins-icon-container">

                </div>
            </div>
        </div>


        <div class="col-lg-4">

            <div class="row">
                <div class="col-lg-9 fv-row fv-plugins-icon-container">
                    {{-- <input type="text" name="fullname"
                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                        placeholder="نام و نام خانوادگی" value="@if (isset($data)) {{ $data->name }} @endif"> --}}

                </div>

            </div>
        </div>



    </div>
    <div class="row mb-6">



        <div class="col-lg-6 fv-row fv-plugins-icon-container">

        </div>

    </div>

    <div class="row mb-6">


        <div class="col-lg-4 fv-row fv-plugins-icon-container">

        </div>


        <div class="col-lg-4 fv-row fv-plugins-icon-container">

        </div>


    </div> --}}



