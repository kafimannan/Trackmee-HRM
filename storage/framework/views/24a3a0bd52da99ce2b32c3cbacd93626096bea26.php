<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        ADD Tracker
        
    </div>
    <div class="panel panel-body">
        <form method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="name">Name<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <input class="form-control" type="text" name="e_name" id="t_name" value="" placeholder="Enter Employee Name" value="<?php echo old('e_name'); ?>"/>
            </div>
            <div class="form-group">
                <label for="email">Email<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <input class="form-control" type="email" name="e_email" id="t_email" value="" placeholder="Enter Employee Email" value="<?php echo old('e_email'); ?>"/>
            </div>
            <button type="submit" class="btn btn-danger" style="width: 100px">ADD</button>
            
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