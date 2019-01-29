<?php $__env->startSection('li'); ?>
<html>
<body>
	 <?php if(checkPermission(['bde'])): ?>
        <div class="add-article">
        <a href="<?php echo e(('add.activity')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter une activité</a>
        </div>
        <?php endif; ?>
             <form  style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="<?php echo e(('searchActivity')); ?>" id='search' autocomplete="true" >
        </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
<?php echo $__env->yieldContent('body'); ?>
<main>
    <?php echo $__env->make('searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
              <form method="post" action="<?php echo e(('warningEvent')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" readonly class="form-control-plaintext" name="warningID" id ='id' value="<?php echo e($event->id); ?>">
                <button type="submit" class="btn btn-primary mb-2">Signaler</button>
              </form>
              <?php endif; ?>
              <?php if(checkPermission(['bde'])): ?> 
              <form method="post" action="<?php echo e(('hide')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" readonly class="form-control-plaintext" name="id" id ='id' value="<?php echo e($event->id); ?>">
                <button type="submit" class="btn btn-primary mb-2">Masquer</button>
              </form>
              <?php endif; ?>
        </div>
        </div>
        </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
</body>
</html>
 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>