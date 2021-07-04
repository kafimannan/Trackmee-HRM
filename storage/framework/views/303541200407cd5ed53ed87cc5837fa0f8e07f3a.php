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
                <label for="name">Employee name<span class="error">*</span></label>
                <input class="form-control" type="text" name="d_ename" value="" placeholder="Enter employee Name">
            </div>
            <div class="form-group">
                <label for="email">Device serial no<span class="error">*</span></label>
                <input class="form-control" type="email" name="t_email" value="" placeholder="Enter device serial no">
            </div>
            <div class="form-group">
                <select id="type" name="d_type" class="form-control">
                            <option value="-1">
                                Choose device type
                            </option>
                            <option value="Mobile">
                                Mobile
                            </option>
                            <option value="Laptop">
                                Laptop
                            </option>

                        </select>
            </div>
            <button type="submit" class="btn btn-danger" style="width: 100px">ADD</button>
            
        </form>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>