     <form style= "position: relative; margin-left: 20%; margin-top: 10rem; max-width: 20%;" action="<?php echo e(('filter')); ?>" >
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" style="margin-left: 60%; margin-top: -4rem;  max-width: 20%;" for="inputGroupSelect01">Options</label>
      </div>  
      <select class="custom-select" id="inputGroupSelect01">
        <option selected>Choose...</option>
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option name="filterCat" value="">
            <?php echo e($prod->type); ?>

          </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <option>Prix par ordre croissant</option>
        <option>Prix par ordre décroissant</option>
      </select>
    </div>
    <button class="btn btn-sm" style="background-color: rgb(238, 193, 94);">Filtrer</button>
  </form>