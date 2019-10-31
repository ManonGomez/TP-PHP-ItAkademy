<?php ob_start(); ?>


<div class="card">
  <div class="card-body">
    <?php echo '<p>Hello World !</p>'; ?>
    <a href="jeu.php" type="button" class="btn btn-dark">JOUER !</a>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>