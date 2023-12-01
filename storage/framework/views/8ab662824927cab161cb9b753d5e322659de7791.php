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



    <div class="row g-5 g-xl-8">
        <div class="col-xl-12">
            <div class="card card-xl-stretch mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5 align-items-center">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">ادمین ها</span>

                    </h3>
                </div>

                <div class="card-body py-3">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <thead>
                                    <tr class="fw-bold text-muted">
                                        <th class="min-w-200px">نام</th>
                                        <th class="min-w-150px">ایمیل</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($admin->name); ?></a>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6"><?php echo e(@$admin->email); ?></a>
                                            </td>


                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sample\panel-admin\resources\views/admin/index.blade.php ENDPATH**/ ?>