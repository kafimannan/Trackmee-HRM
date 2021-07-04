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
                <input class="form-control" type="text" name="t_name" id="t_name" value="" placeholder="Enter Tracker Name" value="<?php echo old('t_name'); ?>"/>
            </div>
            <div class="form-group">
                <label for="email">Email<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <input class="form-control" type="email" name="t_email" id="t_email" value="" placeholder="Enter Tracker Email" value="<?php echo old('t_email'); ?>"/>
            </div>
            <div class="form-group">
                <label for="name">Username<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <input class="form-control" type="text" name="t_username" id="t_username" value="" placeholder="Enter Tracker Username" value="<?php echo old('t_userbame'); ?>"/>
            </div>
            <div class="form-group">
                <label for="type">Type<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <select id="t_type" name="t_type" id="t_type" class="form-control" value="<?php echo old('t_type'); ?>">
                    <option value="-1">
                        Choose tracker type
                    </option>
                    <option value="Admin">
                        Admin
                    </option>
                    <option value="Tracker">
                        Tracker
                    </option>
                    
                </select>
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