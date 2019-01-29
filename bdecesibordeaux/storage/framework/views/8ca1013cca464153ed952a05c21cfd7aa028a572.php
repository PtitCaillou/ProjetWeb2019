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
                    </li>
                <?php endif; ?>
            </li>
            <?php echo $__env->yieldContent('li'); ?>
        </ul>
    </div>
</nav>
<?php echo $__env->yieldSection(); ?>
