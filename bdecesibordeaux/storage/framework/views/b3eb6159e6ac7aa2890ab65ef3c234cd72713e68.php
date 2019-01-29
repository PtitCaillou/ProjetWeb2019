 
<?php $__env->startSection('li'); ?>
<html>

<body>
    <?php if(checkPermission(['bde'])): ?>
        <a href="<?php echo e(('add.activity')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter une activité</a>
    <?php endif; ?>
    <form style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="<?php echo e(('searchActivity')); ?>" id='search'
        autocomplete="true">
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
                            <img class="night" src="<?php echo e($event->media); ?>" class="d-block w-100" alt="...">
                            <p class="card-text"> <?php echo e($event->description); ?></p>
                            <form method="post" action="<?php echo e(('likeactivity')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" readonly class="form-control-plaintext" name="hide" value="<?php echo e($event->id); ?>">
                                <button type="submit" class="btn btn-primary mb-2">Like : <?php echo e($event->like); ?></button>
                            </form>
                            <form method="post" action="<?php echo e(('description')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" readonly class="form-control-plaintext" name="description" id="name" value="<?php echo e($event->id); ?>">
                                <button type="submit" class="btn btn-primary mb-2">Voir plus</button>
                            </form>
                            <?php if(checkPermission(['employee'])): ?>
                            <a href="<?php echo e(('warning')); ?>" class="btn btn-primary">Signaler</a> <?php endif; ?> <?php if(checkPermission(['bde'])): ?>
                            <form method="post" action="<?php echo e(('hide')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" readonly class="form-control-plaintext" name="id" id='id' value="<?php echo e($event->id); ?>">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
  crossorigin="anonymous"></script>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>