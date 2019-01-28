<?php $__env->startSection('content'); ?>
<html>
    <body>
<div class="container-inscription">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card">
                <div class="inscr-head">
                <div class="card-header " style="margin-left:25%;"><?php echo e(__('INSCRIPTION')); ?></div>
                </div>
                <div class="inscr">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nom')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Prénom')); ?></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

                                <?php if($errors->has('lastname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!--  <div class="form-group row">
                           <label for="localisation" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Localisation')); ?></label>
                           <select>
                               <option>Bordeaux</option>
                               <option>Nanterre</option>
                               <option>Toulouse</option>
                               <option>Nantes</option>
                               <option>Strasbourg</option>
                               <option>Lille</option>
                               <option>Arras</option>
                               <option>Rouen</option>
                               <option>Caen</option>
                               <option>Brest</option>
                               <option>Saint-Nazaire</option>
                               <option>La rochelle</option>
                               <option>Pau</option>
                               <option>Montpellier</option>
                               <option>Aix-en-Provence</option>
                               <option>Nice</option>
                               <option>Grenoble</option>
                               <option>Lyon</option>
                               <option>Dijon</option>
                               <option>Nancy</option>
                               <option>Reims</option>
                               <option>Orleans</option>
                           </select>
                        
                               <?php if($errors->has('localisation')): ?>
                                   <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($errors->first('localisation')); ?></strong>
                                   </span>
                               <?php endif; ?>
                           </div>
                                                </div>
                            -->
         

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="cgu">
                        <input type="checkbox" id="scales" name="scales">
                            <label for="scales">J'accepte les conditions générales d'utilisations</label>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn" style="background-color:rgb(238, 193, 94)">
                                    <?php echo e(__('Inscription')); ?>

                                </button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>