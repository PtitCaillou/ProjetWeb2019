 
<?php $__env->startSection('li'); ?>
<html>

<body>



    
<?php $__env->startSection('content'); ?>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" style="background-color: rgb(238, 193, 94)" type="button" id="dropdownMenu1"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Filtrer
                    <span class="caret"></span>
            </button>
        <ul class="dropdown-menu" style="background-color: rgb(238, 193, 94)" aria-labelledby="dropdownMenu1">
            <li>
                <p href="#" title="Lien 1">Catégories</p>
            </li>
            <li>
                <p href="#" title="Lien 2">Soirées</p>
            </li>
            <li>
                <p href="#" title="Lien 3">Manifestations</p>
            </li>
            <li>
                <p href="#" title="Lien 4">Associations</p>
            </li>
        </ul>

    </div>

    <div class="container">
        <?php $__currentLoopData = $idea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
                $id = $idea->id;
                $name = $idea->name;
                $description = $idea->description;
                $type = $idea->type;
                $image = $idea->image;
                $user = $idea->user;
                $likes = $idea->like;
            ?>
        <div class="well">
            <div class="idea">
                <img class="idea-image" src="<?php echo e($image); ?>">
                <div class="media-body">
                    <h4 class="text-left"><?php echo e($name); ?></h4>
                    <p class="text-left"><?php echo e($description); ?></p>
                    <p class="text-left">Vote : <?php echo e($likes); ?></p>
                    <p class="text-right">Autheur : <?php echo e($user); ?></p>
                    <?php if(checkPermission(['employee'])): ?>
                    <a href="#" class="btn btn-primary">Signaler</a>
                    <!--IDEA BOX CONTROLLER -->
                    <?php endif; ?> <?php if(checkPermission(['bde'])): ?>
                    <a href="#" class="btn btn-primary">Masquer</a>
                    <!--IDEA BOX CONTROLLER -->
                    <a href="#" class="btn btn-primary">Accepter</a>
                    <!--IDEA BOX CONTROLLER -->
                    <?php endif; ?>
                    <ul class="list-inline list-unstyled">
                        <div class="comments">
                            <li><span><p class="like"></span></li>
                            <!-- <img class="thumb-up" src="images/like.png"> -->
                            <span><p class="comment"></p></span>
                        </div>
                        <i class="glyphicon glyphicon-thumbs-up"></i>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="body-idea">
        <form method="post" action="<?php echo e(('add-idea')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <p>Titre de l'idée : </p>
            <input type="text" class="form-control" name="titre">
            <p>Description de l'idée : </p>
            <input type="text" class="form-control" name="description">
            <p>Image : </p>
            <input type="file" class="form-control-file" name="image" accept="image/*">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>




</body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>