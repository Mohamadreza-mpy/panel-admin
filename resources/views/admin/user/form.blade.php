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





