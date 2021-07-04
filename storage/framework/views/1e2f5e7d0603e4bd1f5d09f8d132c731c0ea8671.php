<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<center>
    <h1>Welcome Home Admin</h1> 
</center>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>