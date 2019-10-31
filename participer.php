<?php ob_start(); 

session_start();

if (!empty($_POST['mail']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
    // on affiche nos résultats
    echo 'Votre nom est '.$_POST['firstName'].' - '.$_POST['lastName'].' et votre email est '.$_POST['mail'];
        

    $secureMail= htmlspecialchars(strip_tags($_POST['mail']));
    $secureFirst= htmlspecialchars(strip_tags($_POST['firstName']));
    $secureLast= htmlspecialchars(strip_tags($_POST['lastName']));

    $completName="./participants/".$secureMail.".txt";
    $test = $secureMail.";".$secureLast.";".$secureFirst;
    
    if(file_exists($completName) == true){
        echo " / ATTENTION Votre profil est déjà enregistré !";
    }else{
        file_put_contents($completName, $test);
    }
}else{
    header('Location: jeu.php');
}


 $content = ob_get_clean(); 

 require('template.php'); 