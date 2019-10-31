<?php ob_start();

if( $_POST['pseudo'] == 'admin' && $_POST['password'] == 'hello'){
 echo 'Bonjour Admin, ceci est votre
tableau de bord';
}else{
    header('Location: login.php');
}


$content = ob_get_clean();

require('template.php'); 