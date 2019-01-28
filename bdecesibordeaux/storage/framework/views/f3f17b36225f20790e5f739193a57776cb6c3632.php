<head>
	<title>Boite à idées</title>
</head>
<body>
    <header>
        <h3>Boite à idées</h3>
    </header>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <h3><br>Idées prises en charge</h3>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle"  style="background-color: rgb(238, 193, 94)"  type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Filtrer
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu"  style="background-color: rgb(238, 193, 94)"aria-labelledby="dropdownMenu1">
            <li><p href="#" title="Lien 1">Catégories</p></li>
            <li><p href="#" title="Lien 2">Soirées</p></li>
            <li><p href="#" title="Lien 3">Manifestations</p></li>
            <li><p href="#" title="Lien 4">Associations</p></li>
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
            ?>
        <div class="well">
            <div class="idea">
                <img class="idea-image" src="<?php echo e($image); ?>">
                <div class="media-body">
                    <h4 class="text-left"><?php echo e($name); ?></h4>
                    <p class="text-left"><?php echo e($description); ?></p>
                    <p class="text-right">Autheur : <?php echo e($user); ?></p>
                    <?php if(checkPermission(['employee'])): ?>
                        <a href="#" class="btn btn-primary">Signaler</a> <!--IDEA BOX CONTROLLER -->
                    <?php endif; ?>
                    <?php if(checkPermission(['bde'])): ?>
                        <a href="#" class="btn btn-primary">Masquer</a> <!--IDEA BOX CONTROLLER -->
                        <a href="#" class="btn btn-primary">Accepeter</a> <!--IDEA BOX CONTROLLER -->
                    <?php endif; ?>
                    <ul class="list-inline list-unstyled">
                        <div class="comments">
                            <li><span><p class="like"></i>5 &nbsp</span></li>
                            <img class="thumb-up" src="images/like.png">
                            <span><p class="comment"></i> &nbsp&nbsp&nbsp 2</p></span>
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
    <div class="container">
        <footer>
            
        </footer>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  
</body>






 
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>