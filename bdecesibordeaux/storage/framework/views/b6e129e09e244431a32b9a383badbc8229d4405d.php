<!DOCTYPE html>
<html>


<head>
	<title>Description d'activité</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header>
		<h1>Description</h1>
		<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header>
	<main>
		<?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<h2><?php echo e($event->name); ?></h2>
		<p><?php echo e($event->price); ?></p>
		<p style="color: white"><?php echo e($event->description); ?></p>
		<a href="#"><img src="#"> Album</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</main>
	<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>