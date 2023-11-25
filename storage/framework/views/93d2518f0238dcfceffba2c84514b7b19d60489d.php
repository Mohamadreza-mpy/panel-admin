


    <div class="col-12">

        <div class="fv-row mb-7 fv-plugins-icon-container">

            <label class="fs-6 fw-semibold form-label mt-3">
                <span class="required">عنوان</span>
            </label>

            <input type="text" class="form-control form-control-solid" name="title" value="<?php if(isset($data)): ?> <?php echo e($data->title); ?> <?php else: ?><?php echo e(old('title')); ?><?php endif; ?>">

            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>




















</div>


































































<div class="fv-row mb-7">

    <label class="fs-6 fw-semibold form-label mt-3">
        <span class="required">توضیحات</span>

    </label>

    <textarea class="form-control form-control-solid ckeditor" rows="5" name="description"><?php if(isset($data)): ?> <?php echo e($data->description); ?> <?php else: ?><?php echo e(old('description')); ?><?php endif; ?></textarea>

</div>

<div class="separator mb-6"></div>


<div class="d-flex justify-content-end">

    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
        <span class="indicator-label">ذخیره</span>
    </button>
    <!--end::Button-->
</div>
<?php /**PATH D:\sample\panel-admin\resources\views/admin/category-article/form.blade.php ENDPATH**/ ?>