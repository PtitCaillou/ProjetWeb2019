<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>BDE CESI Bordeaux</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Bde Cesi')); ?></title>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div id="app">
            <?php $__env->startSection('head'); ?>
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color:black; z-index:2;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-white " href="<?php echo e('/'); ?>">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="<?php echo e('shop'); ?>">Boutique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="<?php echo e('activity'); ?>">Activités</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="<?php echo e('ideaBox'); ?>">Boite à idées</a>
                            </li>
                            <li class="nav-item">
                                <?php if(! Auth::check()): ?>
                                    <div class="authentification">
                                        <a class="Connexion" href="<?php echo e('login'); ?>">Connexion</a>
                                        <a class="Inscription" href="<?php echo e('register'); ?>">Inscription</a>
                                    </div>
                                <?php elseif(Auth::check()): ?>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; left: 90%; top: -5rem;">
                                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink" style="background-color: rgb(238, 193, 94);">
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            </li>
                            <?php echo $__env->yieldContent('li'); ?>
                        </ul>
                    </div>
                </nav>
            <?php echo $__env->yieldSection(); ?>

            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <footer class="foot">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-2">

                    <!-- Content -->
                    <h5 class="text-uppercase">Contact</h5>
                    <h5>264 boulevard godard, <br>33000, Bordeaux, France.<br>communication@bdecesibordeaux.fr.</h5>
                    </div>
                    <!-- Grid column -->
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-2">

                        <!-- Links -->
                    

                    <div class="socialService">
                        <a class="text-uppercase" style="color:white;">Links</a>
                        <li class="list-item text-white"><a href="https://www.instagram.com/bde_cesi_bdx/?hl=fr"><img class="instagram" src="images/instagram.png"></a></li>
                        <li class="list-item text-white"><a href="https://www.facebook.com/bdecesibdx/"><img class="facebook" src="images/fb.png"></a></li>
                        <li class="list-item text-white"><a href="https://twitter.com/BdeCesiBordeaux"><img class="twitter" src="images/twitter.png"></a></li>       
                    </div>
                     <div class="links">
                        <a href="http://bdecesibordeaux/"> bdecesibordeaux.fr</a>
                        <a href="Mentions légales.pdf"><br>Mentions légales</a>
                    </div>
                </div>
            </footer>   
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </body>
</html>
