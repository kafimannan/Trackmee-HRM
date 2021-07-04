<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        Employee List
        <a class="btn btn-primary" style="float: right;padding: 3px 3px;margin-top: -3px;" href="<?php echo e(route('admin.employee.add')); ?>"> <i class="glyphicon glyphicon-plus"></i> Add</a>

    </div>
    <div class="panel-body">
        <?php if(session('errMsg')!=null): ?>
        <div class="alert-danger">
            <strong>
                <?php echo e(session('errMsg')); ?>

            </strong>
        </div>
        <?php endif; ?>
        <?php if(session('successMsg')!=null): ?>
        <div class="alert-success">
            <strong>
                <?php echo e(session('successMsg')); ?>

            </strong>
        </div>
        <?php endif; ?>
        <table class="table">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Email 
                </th>
                
                <th>
                    option
                </th>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td>
                    <?php echo e($user->employee_name); ?>

                </td>
                <td>
                    <?php echo e($user->email); ?>

                </td>
                
                <td>
<!--                    <a class="btn btn-sm btn-success" href="<?php echo e(route('admin.employee.edit',['id'=>$user->id])); ?>">Edit</a>-->
                    <a class="btn btn-sm btn-danger" href="#delete_<?php echo e($user->id); ?>" data-toggle="modal" data-terget="#delete_<?php echo e($user->id); ?>">Delete</a>
                    <div id="delete_<?php echo e($user->id); ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #c9302c;color: white">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Employee</h4>
                                </div>
                                <div class="modal-body" style="color: blueviolet">
                                    
                                    <form method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <p>Are You Sure You Want to remove this employee?</p>
                                        <input type="hidden" name="userId" value="<?php echo e($user->id); ?>" style="float: right">
                                         
                                        <button  type="submit" class="btn btn-danger" formaction="<?php echo e(route('admin.employee.delete',['id'=>$user->id])); ?>">Yes</button>
                                    </form>
                                </div>
                                <div class="modal-footer" style="background-color: #c9302c">

                                </div>
                            </div>

                        </div>
                    </div>
                </td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tfoot>
                <tr>
                    <td colspan="5" style="text-align: right">
                        <?php echo e($users->links()); ?>

                    </td> 
                </tr>
            </tfoot>
        </table>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>