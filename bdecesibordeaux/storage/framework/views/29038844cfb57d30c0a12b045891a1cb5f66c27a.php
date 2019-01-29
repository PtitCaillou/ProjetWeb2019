<?php if(checkPermission(['bde'])): ?>
<html>
<body>
<?php $__env->startSection('content'); ?>
	<main>
		<?php echo $__env->yieldContent('body'); ?>
		<form style="margin-top: 5rem;" method="POST" action="<?php echo e(('store')); ?>">
      <?php echo e(csrf_field()); ?>

	<div class="form-group">
    <label for="exampleFormControlInput1" style="position: relative; left: 20%; color:black; ">Titre de l'activité</label>
    <input type="text" name="name" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="position: relative; left: 20%; color:black;">Lieu</label>
    <input type="text" name="location" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="position: relative; left: 20%; color:black;">Prix</label>
    <input type="price" name="price" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
  <div class="form-group">
  	<label for="exampleFormControlInput1" style="position: relative; left: 20%; color:black;">Date</label>
   <input type="date" name="date" style="position: relative; left: 20%; max-width: 50%;">
</div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1" style="position: relative; left: 20%;color:black;">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" style="position: relative; left: 20%; max-width: 50%;" rows="3"></textarea>
  </div>
  <select style="position: relative; left: 20%; max-width: 50%;" name="type" class="custom-select">
  <option selected>Choisir le type de l'évenement</option>
  <option value="1">Ponctuel</option>
  <option value="2">Récurrant</option>
</select>
  <div class="form-group">
    <label for="exampleFormControlFile1" style="position: relative; left: 20%; max-width: 50%;">Ajouter une image</label>
    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" style=" position: relative; left: 20%; max-width: 50%;">
  </div>
	<button type="submit" class="btn btn-primary" style= "position: relative; left: 20%;">Ajouter l'activité</button>
</form>
	</main>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
  crossorigin="anonymous"></script>
 
    <?php $__env->stopSection(); ?>
</body>
<?php elseif(checkPermission(['student','employee'])): ?>
<p>Vous n'etes pas autorisé a acceder a cette page.</p>
<a href="<?php echo e(('activity')); ?>">Retour</a>
<?php else: ?>
<?php
	header('Location : login');
	exit();
?>
<?php endif; ?>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>