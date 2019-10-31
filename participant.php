<?php ob_start(); 

session_start();

if(!empty($_SESSION['pseudo'])){
 
 $path = "./participants/";
 $pathdir = scandir($path);

    foreach($pathdir as $result){
        if($result != "." && $result != ".."){
            $container =  file_get_contents($path.$result);
            list($mail, $lastN, $firstN) =explode(';', $container);
            echo "<p>$firstN $lastN / $mail</p>";
        }
       
    }


}else{
    header('Location: login.php');
}


$content = ob_get_clean();

require('template.php'); 