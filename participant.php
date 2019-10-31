<?php ob_start(); 

if( $_POST['pseudo'] == 'admin' && $_POST['password'] == 'hello'){
 //afficher la liste des personnes qui participent au jeu
}else{
    header('Location: login.php');
}


$content = ob_get_clean();

require('template.php'); 