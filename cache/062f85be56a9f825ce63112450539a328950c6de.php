
<?php $__env->startSection('section'); ?>
    <h3>Login your account</h3>
    <p><?php echo e($users); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\views/auth/login.blade.php ENDPATH**/ ?>