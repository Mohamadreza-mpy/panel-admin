<div class="card-body border-top p-9">
    <div class="row w-100 m-0">

        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">نام و نام خانوادگی</label>
            <input type="text" name="fullname"
            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
            placeholder="نام و نام خانوادگی"
            value="<?php if(isset($data)): ?> <?php echo e($data->name); ?> <?php endif; ?>">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">سطح دسترسی</label>

            <select name="group" class="form-select" aria-label="Default select example">
                <option selected>سطح دسترسی</option>
                <?php $__currentLoopData = @$roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option <?php if(isset($data) && $data->roles[0]->id == $role->id): ?> selected <?php endif; ?> value="<?php echo e($role->id); ?>"><?php echo e($role->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-4 p-2">
            <label class="col-lg-12 col-form-label required fw-semibold fs-6">ایمیل</label>
            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
            value="<?php if(isset($data)): ?> <?php echo e($data->email); ?> <?php endif; ?>">
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
</div>





<?php /**PATH D:\sample\panel-admin\resources\views/admin/user/form.blade.php ENDPATH**/ ?>