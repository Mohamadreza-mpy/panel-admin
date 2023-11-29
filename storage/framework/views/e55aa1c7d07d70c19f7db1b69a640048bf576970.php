<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">

    <div class="col-6">

        <div class="fv-row mb-7 fv-plugins-icon-container">

            <label class="fs-6 fw-semibold form-label mt-3">
                <span class="required">عنوان</span>
            </label>

            <input type="text" class="form-control form-control-solid" name="title" value="<?php if(isset($data)): ?> <?php echo e($data->title); ?><?php else: ?><?php echo e(old('title')); ?><?php endif; ?>">

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
                <?php $__currentLoopData = $categoryArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catarticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if(isset($data) && $catarticle->id == $data->category_id): ?> selected <?php endif; ?> value="<?php echo e($catarticle->id); ?>"><?php echo e($catarticle->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </select>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>


    </div>



</div>





    <label class="fs-6 fw-semibold form-label mt-3">
        <span class="required">توضیحات</span>

    </label>

    <textarea class="form-control form-control-solid ckeditor" rows="5" name="description"><?php if(isset($data)): ?> <?php echo e($data->description); ?><?php else: ?><?php echo e(old('description')); ?><?php endif; ?></textarea>




<div class="separator mb-6"></div>


<div class="d-flex justify-content-end">

    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
        <span class="indicator-label">ذخیره</span>
    </button>
    <!--end::Button-->
</div>
<?php /**PATH D:\sample\panel-admin\resources\views/admin/article/form.blade.php ENDPATH**/ ?>