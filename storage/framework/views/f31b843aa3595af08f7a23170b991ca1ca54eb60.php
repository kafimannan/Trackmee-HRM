<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        Tracker List
        <a class="btn btn-primary" style="float: right;padding: 3px 3px;margin-top: -3px;" href="<?php echo e(route('admin.device.add')); ?>"> <i class="glyphicon glyphicon-plus"></i> Add</a>
        
    </div>
    <div class="panel-body">
        <table class="table">
            <tr>
                <th>
                   Employee Name
                </th>
                <th>
                   Employee Device  
                </th>
                <th>
                   Device Type
                </th>
                
                <th>
                    option
                </th>
            </tr>
            <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                   <?php echo e($data->employee_name); ?> 
                </td> 
                <td>
                  <?php echo e($data->device_serial_no); ?>  
                </td>
                <td>
                   <?php echo e($data->type); ?> 
                </td>
                <td>
                    <a class="btn btn-sm btn-success" href="#">Edit</a>
                </td>
                <td>
                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
        </table>
        
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>