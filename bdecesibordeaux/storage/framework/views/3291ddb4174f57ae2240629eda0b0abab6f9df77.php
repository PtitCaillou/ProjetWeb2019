<html>
<head>
    
    
    
    

    <title>BDE Acceuil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php $__env->startSection('head'); ?>
    <header>
            <h1>Accueil BDE</h1>
            <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Permission</div>


                <div class="panel-body">


                   <!--  <?php if(checkPermission(['student'])): ?>
                   <a href="<?php echo e(url('permissions-all-users')); ?>"><button>Access All Users</button></a>
                   <?php endif; ?>
                   
                   
                   <?php if(checkPermission(['employee'])): ?>
                   <a href="<?php echo e(url('permissions-admin-employee')); ?>"><button>Access Admin and Superadmin</button></a>
                   <?php endif; ?>
                   
                   
                   <?php if(checkPermission(['bde'])): ?>
                   <a href="<?php echo e(url('permissions-bde')); ?>"><button>Access Only Superadmin</button></a>
                   <?php endif; ?>
                   
                   <?php if(checkPermission(['visitor'])): ?>
                   <a href="<?php echo e(url('permissions-visitor')); ?>"><button></button></a>
                   <?php endif; ?> -->


                </div>
            </div>
        </div>
    </div>
</div>
            
</header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<main>

</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>
<footer>
  
</footer>
<?php $__env->stopSection(); ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('goodiesDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('eventDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>