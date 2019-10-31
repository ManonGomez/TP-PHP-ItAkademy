<?php ob_start(); ?>


<div class="card">
  <div class="card-body">
  <?php echo '<p>Hello World !</p>'; ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>