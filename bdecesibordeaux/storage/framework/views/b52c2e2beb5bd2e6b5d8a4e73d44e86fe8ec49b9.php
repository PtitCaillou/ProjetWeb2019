<html>
<body>
  <?php $__env->startSection('li'); ?>
  <header>
    <div class= "menu-top">
      <a href="<?php echo e(('add.product')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter un produit</a>
      <a href="<?php echo e(('basket')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Panier</a>
      <?php echo $__env->make('searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</a>
</div>
  </header>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
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
                <a href="#" class="btn btn-primary">Signaler</a>
              <?php endif; ?>
              <?php if(checkPermission(['bde'])): ?>
                <a href="#" class="btn btn-primary">Masquer</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>