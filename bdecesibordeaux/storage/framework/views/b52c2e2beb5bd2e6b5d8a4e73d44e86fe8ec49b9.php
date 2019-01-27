<html>
<head>
    <title>Boutique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
    <h3>BOUTIQUE</h3>
    <!--  adding button to add an article  -->
    </div></a>
      <?php if(checkPermission(['bde'])): ?>
        <div class="add-article">
        </div>
        <?php endif; ?>
                <a href="<?php echo e(('basket')); ?>" class="btn btn-lg active" style= "margin-left:65%" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter un produit</a>
                </header>
        <a href="<?php echo e(('add.product')); ?>" class="btn btn-lg active" role="button" aria-pressed="true" style="background-color: rgb(238, 193, 94);"> Ajouter un produit</a>
        </div>
      <?php endif; ?>
  </header>
  <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <form  style="position: relative; left: 80%; margin-top: 1rem; max-width: 20%;" action="<?php echo e(('searchShop')); ?>">
    <?php echo $__env->make('searchBar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </form>
  <?php echo $__env->make('goodiesDuMois', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $name = $product->name;
      $price = $product->price;
    ?>
    <!-- creating the product view -->                                                                                                                               
    <!-- Content Row -->
    <div class="produits">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title" name ="name" ><?php echo e($name); ?><? return $name ?></h4>
              <img class= "pullbleu" src="css/pull.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary"><?php echo e($price); ?><? return $price ?></a>
              <a href="<?php echo e(('add-basket')); ?>" class="btn btn-primary">Ajouter au panier</a>
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
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <div class="container">
    <footer>
      
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</body>
</html>

 
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>