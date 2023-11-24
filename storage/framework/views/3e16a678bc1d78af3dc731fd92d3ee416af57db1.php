
<script>
    var hostUrl = "assets/";
</script>

<script src="<?php echo e(asset('assets/admin/cheakurl.js')); ?>"></script>
<?php if(Request::segment(2) != 'consultants' && Request::segment(2) != 'departmans'): ?>
<script src="<?php echo e(asset('assets/dashboard/js/plugins.bundle.js')); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('assets/admin/vue.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>\
<script src="<?php echo e(asset('assets/dashboard/js/scripts.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/dashboard/js/fullcalendar.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/dashboard/js/ckeditor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/date/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/date/bootstrap-datepicker.fa.min.js')); ?>"></script>
<script>
    var cks = document.getElementsByClassName('ckeditor');
    Array.from(cks).forEach((el) => {
        // console.log(el)
        CKEDITOR.replace(el, {
            language: 'fa',
            content: 'fa',

            
            
        });
    });
</script>

<?php echo $__env->yieldContent('bottom_scripts'); ?>

<?php echo $__env->make('layouts.admin.blocks.vue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\sample\panel-admin\resources\views/layouts/admin/blocks/scripts.blade.php ENDPATH**/ ?>