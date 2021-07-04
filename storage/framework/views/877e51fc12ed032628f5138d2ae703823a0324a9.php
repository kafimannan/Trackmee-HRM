<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <center>
        <h1 style="color: green;">
            <span class="glyphicon glyphicon-signal"></span>TrackMee! An Online Reso<span style="color: #009933;">urce Mangement System<span class="glyphicon glyphicon-thumbs-up"></span></span>
        </h1>
    </center>
    <br>
    <br>
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#LoginModal" style="background-color: #009933; border-color: #009933;width: 30%"> <span class="glyphicon glyphicon-user"></span> Login </button></center>
    <br>
    <br>
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#GModal2" style="background-color:  #009933; border-color:  #009933;width: 30%">Guest<span class="glyphicon glyphicon-leaf"></span></button></center>
    <br>
    <br>
    <br>
    <br>
    <?php if(session('error')!=null): ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>
            Failed!
        </strong>
        <?php echo e(session('error')); ?>

    </div>
    <?php endif; ?>
    <div class="container" style="width: 50px">
        <div id="LoginModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">


                <div class="modal-content">
                    <div class="modal-header" style="background-color: #009933">
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <center><h4 class="modal-title" style="background-color: #009933"><span class="glyphicon glyphicon-lock"></span>  Login</h4></center>
                    </div>
                    <div class="modal-body modal-lg" style="height: 200px;color: black;">

                        <div id="error" class=" alert-danger" hidden >
                            
                             <strong>
                                 <p id="errMsg"><span class="glyphicon glyphicon-warning-sign"></span> </p>
                            </strong>
                            
                        </div>
                        <form method="post" id="loginForm" >
                          <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <label for="username" class="control-label">Username <span class="mark" style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>


                            <div class="form-group">
                                <label for="pwd" class="control-label">Password <span class="mark" style="color: red;">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-group" style="float: right;">
                                <button   id="btnLogin"     onclick="Login()"   style="background-color: #f00;color: #fff" class="btn btn-danger">Login</button>
                            </div>

                        </form>


                    </div>
                    <div class="modal-footer" style="background-color: #fff">

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>