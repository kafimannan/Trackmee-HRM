        
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
                        <span class="glyphicon glyphicon-signal"></span>TrackMee! An Online Reso<span style="color: red;">urce Mangement System<span class="glyphicon glyphicon-thumbs-up"></span></span>
                    </h1>
                </center>
                <br>
                <br>
                <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #ff1a1a; border-color: #ff1a1a;width: 30%"> <span class="glyphicon glyphicon-user"></span> Login </button></center>
                <br>
                <br>
                <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="background-color:  #009933; border-color:  #009933;width: 30%">Guest<span class="glyphicon glyphicon-leaf"></span></button></center>
               
       </div>
       <?php $__env->stopSection(); ?>
      
      <?php $__env->startSection('script'); ?>
      <script type="text/javascript">
         document.getElementById("home").onclick()=function(){
            document.getElementById("home").class="active"

         }
      </script>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>