<?php if(isset($errors)): ?>
    <?php if($errors->any() || Session::has('error')): ?>

        <?php if(Session::has('error')): ?>
            <script>
                var msg = " <?php echo Session::get('error'); ?>";
                swal("خطا", msg, "error")
            </script>
        <?php endif; ?>
        <?php if(isset($errors)): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    var msg = "<?php echo $error; ?>";
                    swal("خطا", msg, "error")

                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<?php if(Session::has('success')): ?>
    <script>
        var msg = "<?php echo Session::get('success'); ?>";
        swal("موفق", msg, "success")

    </script>
<?php endif; ?>

<?php if(Session::has('info')): ?>
    <script>
        var msg = "<?php echo Session::get('info'); ?>";
        swal("", msg, "success")
    </script>
<?php endif; ?>

<?php /**PATH D:\sample\panel-admin\resources\views/layouts/message-swal.blade.php ENDPATH**/ ?>