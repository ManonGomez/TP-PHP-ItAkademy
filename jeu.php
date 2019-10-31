<?php ob_start(); 

session_start();?>

<form method="post" action='participer.php'>
  <div class="form-group" >
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email" name="mail">
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Prénom" name="firstName">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nom" name="lastName">
    </div>
  </div>
  <input type="submit" id="send" name="form-group" value="Envoyer" class="btn btn-outline-dark">
    <?php

  

    ?>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>