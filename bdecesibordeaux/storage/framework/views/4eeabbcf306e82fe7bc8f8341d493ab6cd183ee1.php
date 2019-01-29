<html>
<body>
<?php $__env->startSection('content'); ?>
  <header>
  <?php echo $__env->make('searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(checkPermission(['student','employee','bde'])): ?>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $name = $product->name;
        $quantity = $product->quantity;
        $image = $product->image;
      ?>
      <div class="produits" style="left:-20%;">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body" style="position:relative; width:60%;">
                <h4 class="card-title" name ="name" ><?php echo e($name); ?><? return $name ?></h4>
                <img class= "<?php echo e($name); ?>" src="<?php echo e($image); ?>" class="d-block w-100" style="width:50%; position:relative;" alt="...">
              </div>
              <div class="card-footer" style=" height:60%;">
                <a href="#" class="btn btn-primary" style="position:relative;"><?php echo e($quantity); ?><? return $price ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <div class="finishbasket" style="top:50%;">
    <form method="post" action="<?php echo e(('finish-basket')); ?>">
        <?php echo e(csrf_field()); ?>

        <button type="submit" class="btn btn-primary mb-2" style="position:relative;left:80%;">Finaliser le panier</button>
    </form>
    <form method="post" action="<?php echo e(('del-basket')); ?>">
        <?php echo e(csrf_field()); ?>

        <button type="submit" class="btn btn-primary mb-2"style="position:relative;left:80%;">Supprimer le panier</button>
    </form>
</div>
    <?php else: ?>
      <?php 
        header('Location: login'); 
        exit();
      ?>
      <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
      <p>Pour vous connecter cliquez <a href="<?php echo e(('login')); ?>"> ici</a></p>
    <?php endif; ?>
  </header>

  <?php $__env->stopSection(); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>