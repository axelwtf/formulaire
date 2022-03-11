<?php

$maVariable = "test";

var_dump($_POST);

// Test si form envoye
if (isset($_POST['message'])) {

    // verification si le form est correct
    $err=0;
    if (empty($_POST['nom'])) {
        $err=1;
    } else {
        $nom = htmlspecialchars($_POST['nom']);
    }

    if (empty($_POST['prenom'])) {
        $err=2;
    } else {
        $premon = htmlspecialchars($_POST['prenom']);
    }

    if (empty($_POST['pays'])) {
        $err=3;
    } else {
        $pays = htmlspecialchars($_POST['pays']);
        $world=["BE","IT","FR"];
        if (!in_array($pays,$world)) {
            $err=5;
        }
    }

    if (empty($_POST['message'])) {
        $err=4;
    } else {
        $message = htmlspecialchars($_POST['message']);
    }
    
    //test s'il y'a ya error

    if ($err == 0) {
        echo "ok";
    } else {
        header("LOCATION:index.php?err");
    }
    

}else {

    // redirection si l'user n'est pas passe par le form
    header("LOCATION:index.php");
}

?>