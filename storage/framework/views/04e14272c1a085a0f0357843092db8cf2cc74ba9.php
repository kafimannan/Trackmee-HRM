<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php $__env->startSection('content'); ?>
<div class="panel-default">
    <div class="panel-heading">
        Unlock Trackers
    </div>
    <div class="panel-body">
        <?php if(session('successMsg')!=null): ?>
        <div class="alert-success">
            <?php echo e(session('successMsg')); ?>

        </div>
        <?php endif; ?>
        <?php if(session('errMsg')!=null): ?>
        <div class="alert-danger">
            <?php echo e(session('errMsg')); ?>

        </div>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('admin.tracker.send')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group ">
                <label class="control-label" for="t_name">
                    Email Address <span class="mark">*</span>
                </label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo old('email'); ?>">

            </div>
            <button type="submit" class="btn btn-danger">Unlock</button>

        </form>
        <?php if(count($errors)>0): ?>

        <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert-danger">
            <strong>
                <span class="glyphicon glyphicon-warning-sign"></span> <?php echo e($e); ?>

            </strong>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>