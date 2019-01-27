<?php echo $__env->yieldContent('head'); ?>
 <img class="logo" src="css/logo.jpg">
 <?php if(! Auth::check()): ?>
    <a class="Connexion" href="<?php echo e('login'); ?>">Connexion</a>
    <a class="Inscription" href="<?php echo e('register'); ?>">Inscription</a>
    <?php elseif(Auth::check()): ?>
     <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; left: 90%; top: -5rem;">
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

                                
                                <?php endif; ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-black navbar-fixed-top ">
        <div class="barre">
  <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-white"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <div class="itm">
      <li class="nav-item active ">
        <a class="nav-link text-white " href="<?php echo e('/'); ?>">Accueil <span class="sr-only">(current)</span></a>
      </li>
      </div>
      <div class="itm">
      <li class="nav-item">
        <a class="nav-link text-white " href="<?php echo e('shop'); ?>">Boutique</a>
      </li>
      </div>
      <div class="itm">
        <li class="nav-item">
        <a class="nav-link text-white " href="<?php echo e('activity'); ?>">Activités</a>
      </li>
      </div>
      <div class="itm">
        <li class="nav-item">
        <a class="nav-link text-white " href="<?php echo e('ideaBox'); ?>">Boite à idées</a>
      </li>
      </div>
    </ul>
  </div>
  </div>
</nav>