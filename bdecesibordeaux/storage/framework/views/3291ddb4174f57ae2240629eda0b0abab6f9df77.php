<html>
<body>
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->make('goodiesDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('eventDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<<<<<<< HEAD
    <?php echo $__env->make('cookie', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
=======
>>>>>>> 45955e2a2432dba202dc7add70e1ac37e9375dec
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>