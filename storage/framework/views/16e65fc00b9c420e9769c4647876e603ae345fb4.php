<!DOCTYPE html>

<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        Edit Tracker Profile

    </div >
    <div class="panel-body">
        <form method="POST">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="userId" value="<?php echo e($users->userId); ?>">
            <table class="table table-responsive table-striped">

                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        <?php echo e($users->fullName); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <?php echo e($users->email); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        Address
                    </td>
                    <td>
                        <?php echo e($users->address); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <select id="type" name="t_type" >
                            <option value="-1">
                                Choose tracker type
                            </option>
                            <option value="Admin" <?php if($users->type=='Admin'): ?>selected <?php endif; ?>>
                                Admin
                            </option>
                            <option value="Tracker"  <?php if($users->type=='Tracker'): ?>selected <?php endif; ?>>
                                Tracker
                            </option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-edit"></span> Update</button></td>
                </tr>
            </table>

        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>