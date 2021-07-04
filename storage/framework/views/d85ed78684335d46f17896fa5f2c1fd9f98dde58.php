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
                   Device Serial No 
                </th>
                <th>
                    Type
                </th>
                
                <th>
                    option
                </th>
            </tr>
            <tr>
                <td>
                   Name
                </td>
                <td>
                   xxxxxx 
                </td>
                <td>
                    mobile
                </td>
                
                <td>
                    <a class="btn btn-sm btn-success">Edit</a>
                    <a class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            
        </table>
        
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>