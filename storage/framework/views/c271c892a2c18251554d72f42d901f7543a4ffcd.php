<?php $__env->startSection('title'); ?>
Contact
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
      <script type="text/javascript">
         document.getElementById("contact").onclick()=function(){
            document.getElementById("contact").class="active"

         }
      </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>