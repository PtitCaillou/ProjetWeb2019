<!DOCTYPE html>
<html>
<head>
	<title>Activités</title>
</head>

<body>
	<!-- We check if one user is connected -->
        <?php if(Auth::check()): ?>

<!-- If there is an user connected, we get is role id -->
<!-- When this id is equal to 1 he has a student status. So we create the page for a student -->
 <?php if( Auth::user()->role_id == '1'): ?>{
<header>
	<h3>Activités</h3>
	 <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
</header>
<?php echo $__env->yieldContent('body'); ?>
<main>
	<?php echo $__env->make('eventDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<h2>Autres activités</h2>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

 		<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

          <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
          </div>
        </div>

    </div>
    </div>
</main>

 <div class="container">
        <footer>
            
        </footer>
    </div>

 <!-- When this id is equal to 2 he has a BDE member status. So we create the page for a BDE member -->
    <?php elseif( Auth::user()->role_id == '2'): ?>
    <header>
	<h3>Activités</h3>
	<div class="add-article">
		 <a href="<?php echo e(('add.product')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);">Ajouter une activité</a> 
 	 </div>
	 <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 
</header>

<main>
	<?php echo $__env->make('eventDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<h2>Autres activités</h2>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

 		<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

          <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Masquer</a>
              </div>
          </div>
        </div>

    </div>
    </div>
</main>

 <div class="container">
        <footer>
            
        </footer>
    </div>

    <?php elseif( Auth::user()->role_id == '3'): ?>
    <header>
	<h3>Activités</h3>
	 <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 
</header>

<main>
	<?php echo $__env->make('eventDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<h2>Autres activités</h2>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

 		<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

          <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

         <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">Soirée BDE</h4>
              <img class= "night" src="css/event.jpg" class="d-block w-100" alt="...">
              <p class="card-text" >Soirée amicale entre les différentes promo du cesi bordeaux</p>
              <a href="#" style="color: blue;">Voir plus</a>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Signaler</a>
              </div>
          </div>
        </div>

    </div>
    </div>
</main>

 <div class="container">
        <footer>
            
        </footer>
    </div>
    <?php endif; ?>
    <?php endif; ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">

</body>
</html>
 
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>