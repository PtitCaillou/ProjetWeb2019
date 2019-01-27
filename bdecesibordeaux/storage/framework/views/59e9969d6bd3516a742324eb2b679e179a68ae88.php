<?php if(checkPermission(['bde'])): ?>
<head>
	<title>Ajouter un produit</title>
</head>

<body>
	<header>
		<h1>Ajouter un produit</h1>
		<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</header>
	<main>
		<?php echo $__env->yieldContent('body'); ?>
		<form style="margin-top: 5rem;" method="POST" action="<?php echo e(('store')); ?>">
	<div class="form-group">
    <label for="exampleFormControlInput1" style="color: white; position: relative; left: 20%; ">Nom du produit</label>
    <input type="text" name="name" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="color: white; position: relative; left: 20%; ">Prix</label>
    <input type="price" name="price" class="form-control" style="position: relative; left: 20%; max-width: 50%; " id="exampleFormControlInput1" placeholder="Titre">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white; position: relative; left: 20%; ">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" style="position: relative; left: 20%; max-width: 50%;" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Ajouter une image</label>
    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" style=" position: relative; left: 20%; max-width: 50%;">
  </div>
	<button type="submit" class="btn btn-primary" style= "position: relative; left: 20%;">Ajouter le produit</button>
</form>
	</main>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">
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