<?php $__env->startSection('title'); ?>
About
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
      <script type="text/javascript">
         document.getElementById("about").onclick()=function(){
            document.getElementById("about").class="active"

         }
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>