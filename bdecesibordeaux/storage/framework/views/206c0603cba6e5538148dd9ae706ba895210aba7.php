<!DOCTYPE html>
<html>
<head>
	<title>Activités</title>
</head>

<body>
	<!-- We check if one user is connected -->

<!-- If there is an user connected, we get is role id -->
<!-- When this id is equal to 1 he has a student status. So we create the page for a student -->
<header>
	<h3>Activités</h3>
	 <?php if(checkPermission(['bde'])): ?>
        <div class="add-article">
        <a href="<?php echo e(('add.activity')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter une activité</a>
        </div>
        <?php endif; ?>
             <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             <form  style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="<?php echo e(('searchActivity')); ?>" id='search' autocomplete="true" >
        <?php echo $__env->make('searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
<<<<<<< HEAD
       <script type="text/javascript">

        var url = "<?php echo e(route('autocompleteActivity')); ?>";

        $('#search_text').typeahead({

            source:  function (query, process) {

            return $.get(url, { query: query }, function (data) {

                    return process(data);

                });

            }

        });

    </script>
           </script> 
=======
           <!-- <script type="text/javascript">
           var path = "<?php echo e(route('autocompleteActivity')); ?>";
               $('input.typehead').typeahead({
                   source:  function (query, process) {
                   return $.get(path, { query: query }, function (data) {
                return process(data);
            });
                   }
               });
           </script> -->
>>>>>>> 5616c1217a3b61700c1a9e88a2d645fb79bc0477
<?php echo $__env->yieldContent('body'); ?>
<main>
	<?php echo $__env->make('eventDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<h2>Autres activités</h2>
  <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="event">
 <div class="row">

        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title"> <?php echo e($event->name); ?> </h4>
              <img class= "night" src="<?php echo e(('css/event.jpg')); ?>" class="d-block w-100" alt="...">
              <p class="card-text"> <?php echo e($event->description); ?></p>
              <form method="post" action="<?php echo e(('description')); ?>">
                 <?php echo e(csrf_field()); ?>

              <input type="hidden" readonly class="form-control-plaintext" name="description" id="name" value="<?php echo e($event->id); ?>">
               <button type="submit" class="btn btn-primary mb-2">Voir plus</button>
              </form>
               <?php if(checkPermission(['employee'])): ?>
              <a href="#" class="btn btn-primary">Signaler</a>
              <?php endif; ?>
              <?php if(checkPermission(['bde'])): ?> 
              <a href="#" class="btn btn-primary">Masquer</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</main>

 <div class="container">
        <footer>
            
        </footer>
    </div>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet"href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</body>
</html>
 
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>