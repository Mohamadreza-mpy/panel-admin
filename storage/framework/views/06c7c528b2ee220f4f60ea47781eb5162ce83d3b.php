<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(url('admin/role/update',$data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>عنوان:</label>
                            <input class="form-control" type="text" id="name" name="title" value="<?php if(isset($data->title)): ?> <?php echo e($data->title); ?> <?php endif; ?>" placeholder="عنوان  را وارد کنید . . .">
                        </div>

                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="row">
                        <?php
                        if (isset($data->permission)) {
                            $accessDB = unserialize($data->permission) ? unserialize($data->permission) : [];
                        } else {
                            $accessDB = [];
                        }
                        ?>
                        <?php $__currentLoopData = Config::get('site.permisions'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key !== "dashboard"): ?>
                                <div class="widget col-md-4 p-2">
                                    <div class="card bg-light rounded-lg p-3 h-100 border-0">
                                        <div class="widget-header bordered-bottom bordered-themesecondary">
                                            <i class="widget-icon fa fa-unlock-alt themesecondary"></i>
                                            <span class="widget-caption themesecondary" style="color: #3c8dbc;"><?php echo e($value['title']); ?></span>
                                        </div>
                                        <!--Widget Header-->
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="tickets-container" style="height: 150px;">
                                                    <?php $__currentLoopData = $value['access']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyAccess => $access): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="col-md-6 m-2">
                                                            <?php $permission = 'admin.'.$key.'.'.$keyAccess; ?>
                                                            <input class="form-check-input" type="checkbox" name="access[]" value="<?php echo e($permission); ?>" <?php if(isset($data) && in_array($permission,$accessDB)): ?> checked <?php endif; ?>>
                                                            <span class="text"><?php echo e($access); ?></span>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="widget col-md-4 p-2">
                                    <div class="card bg-light rounded-lg p-3 h-100 border-0">
                                        <div class="widget col-md-12" style="background-color: rgb(248, 248, 248); border: medium solid;">
                                            <div class="widget-header bordered-bottom bordered-themesecondary">
                                                <i class="widget-icon fa fa-unlock-alt themesecondary"></i>
                                                <span class="widget-caption themesecondary" style="color: #3c8dbc;"><?php echo e($value['title']); ?></span>
                                            </div>
                                            <?php $permission = 'admin.dashboard'; ?>
                                            <input type="checkbox" name="access[]" value="<?php echo e($permission); ?>" <?php if(isset($data) && in_array($permission,$accessDB)): ?> checked <?php endif; ?>>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>



                <div class="d-grid gap-2 text-center">
                    <button type="submit" class="btn btn-success px-5  mt-2">ثبت</button>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sample\panel-admin\resources\views/admin/role/edit.blade.php ENDPATH**/ ?>