<?php ob_start(); ?>
<form method="post" class="connexion" action='compte.php'>

    <h6 class="card-title">Connectez-vous</h6>
    
    <div class="form-group">
        <input class="field form-control" type="text" name="pseudo" id="pseudo">
    </div>
    <div class="form-group">
        <input class="field form-control" type="password"  name="password" id="password">
    </div>

    <input class="btn btn-outline-dark" id="send" name="formconnexion" type="submit" value="Se connecter">
   
</form>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>