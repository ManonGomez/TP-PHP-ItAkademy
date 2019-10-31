<?php ob_start();

session_start();

if( $_POST['pseudo'] == 'admin' && $_POST['password'] == 'hello'){
 echo 'Bonjour Admin, ceci est votre
tableau de bord';
$_SESSION['pseudo']=$_POST['pseudo'];
}else{
    header('Location: login.php');
}


$content = ob_get_clean();

require('template.php'); 