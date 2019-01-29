<html>
<body>
  <?php $__env->startSection('li'); ?>
  <header>
    <div class= "menu-top">
        <?php if(checkPermission(['bde'])): ?>
        <a href="<?php echo e(('productadd')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="position:relative; background-color: rgb(238, 193, 94); left:160%;"> Ajouter un produit</a>
        <?php endif; ?> 
        <a href="<?php echo e(('basket')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="position:relative; background-color: rgb(238, 193, 94); left:200%;"> Panier</a>
</div>
  </header>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
  <?php echo $__env->make('searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('goodiesDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <h2>BOUTIQUE</h2>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php 
        $id = $product->id;
        $name = $product->name;
        $price = $product->price;
        $description = $product->description;
        $image = $product->image;
      ?>
      <div class="produits">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title" name ="name" ><?php echo e($name); ?><? return $name ?></h4>
              <img class= "pullbleu" src="<?php echo e($image); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="card-footer">
              <p><?php echo e($description); ?></p>
              <a href="#" class="btn btn-primary"><?php echo e($price); ?><? return $price ?></a>
              <form method="post" action="<?php echo e(('add-basket')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" readonly class="form-control-plaintext" name="add" id="name" value="<?php echo e($product->id); ?>">
                <button type="submit" class="btn btn-primary mb-2">Ajouter au panier</button>
              </form>
              <?php if(checkPermission(['employee'])): ?>     
                    <form method="post" action="<?php echo e(('warningProduct')); ?>">
                   <?php echo e(csrf_field()); ?>

                <input type="hidden" readonly class="form-control-plaintext" name="warningID" value="<?php echo e($product->id); ?>">
                <button type="submit" class="btn btn-primary mb-2">Signaler</button>
              </form>
              <?php endif; ?>
              <?php if(checkPermission(['bde'])): ?>
              <form method="post" action="<?php echo e(('hideproduct')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" readonly class="form-control-plaintext" name="hide" value="<?php echo e($product->id); ?>">
                <button type="submit" class="btn btn-primary mb-2">Masquer</button>
              </form>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->stopSection(); ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>