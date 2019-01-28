<?php $__env->startSection('li'); ?>
<html>
    <body>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
<?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="well">
            <div class="media">
                <img class="idea-image" src="css/marteau.jpg">
                    <div class="media-body">
                        <h4 class="text-left">Le marteau de la mort</h4>
                            <p class="text-left">Tu dois comprendre les options bootstrap</p>
                            <p class="text-right">By Noé Duclos</p>
                            <?php if(checkPermission(['employee'])): ?>
                                <a href="#" class="btn btn-primary">Signaler</a>
                                <?php endif; ?>
                                    <?php if(checkPermission(['bde'])): ?>
                                    <a href="#" class="btn btn-primary">Masquer</a>
                                    <a href="#" class="btn btn-primary">Accepter</a>
                                    <?php endif; ?>
                                    <ul class="list-inline list-unstyled">
                                        <div class="comments">
                                        <li><span><p class="like"></i>5 &nbsp</span></li>
                                        <img class="thumb-up" src="css/like.png">
                                            <span><p class="comment"></i> &nbsp&nbsp&nbsp 2</span>
                                        </p>
                                         </div>
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                     </ul>
                        </div>
                </div>
            </div>
        <div class="well">
            <div class="media">
                <img class="idea-image" src="css/herisson.jpg">
  		    <div class="media-body">
    		    <h4 class="text-left">Le hérisson fou</h4>
            <p class="text-left">On est pas encore des anciens à ce stade.</p>
            <p class="text-right">By Thompu</p>
            <?php if(checkPermission(['employee'])): ?>
                <a href="#" class="btn btn-primary">Signaler</a>
            <?php endif; ?>
            <?php if(checkPermission(['bde'])): ?>
                <a href="#" class="btn btn-primary">Masquer</a>
            <?php endif; ?>
                <ul class="list-inline list-unstyled">
                    <div class="comments">
                        <li><span><p class="likes"></i>10 likes &nbsp</span></li>
                        <span><p class="comment"></i> 2 comments</span>
                    </div>
			    </ul>
            </div>
            </div>
        </div>
    </div>
<div class="body-idea">
<form class="add-idea">
<div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white;">Titre de l'idée:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color: white;">Description de l'idée:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1" style="color: white;">Images:</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
<?php $__env->stopSection(); ?>
    </body>
</html>






 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>