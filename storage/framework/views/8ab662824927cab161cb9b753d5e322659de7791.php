<?php $__env->startSection('content'); ?>

    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-xl-6">

            <div class="card card-flush bgi-no-repeat bgi-size-contain align-items-center"
                 style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                <div class="card-body d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6"><?php echo e($count_artilce); ?></span>
                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">تعداد مقالات</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-6">

            <div class="card card-flush bgi-no-repeat bgi-size-contain align-items-center"
                 style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">



                <div class="card-body d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6"><?php echo e($count_Catergoryartilce); ?></span>
                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">تعداد دسته بندی مقالات </span>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <hr>










































































































































































































<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sample\panel-admin\resources\views/admin/index.blade.php ENDPATH**/ ?>