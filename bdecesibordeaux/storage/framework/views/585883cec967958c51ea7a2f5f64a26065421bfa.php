 <?php if(checkPermission(['student','employee','bde'])): ?>
 <p>produit ajouté</p>
 <?php else: ?>
 <?php 
header('Location: login'); 
  exit();
 ?>
<!--  <p>Vous n'etes pas connecté, vous ne pouvez donc pas acceder a cette page.</p><br>
<p>Pour vous connecter cliquez <a href="<?php echo e(('login')); ?>"> ici</a></p> -->
 <?php endif; ?>