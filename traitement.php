<?php

// var_dump($_POST);
// var_dump($_FILES);


// var_dump($_FILES['fichier']['name']);


// vérif si le form a été envoyé
if(isset($_POST['titre'])){
    // vérif des données en mode string (chaine de caractères)
    $error = 0;
    if(empty($_POST['titre'])){
        $error = 1;
    }

    // vérif si le formulaire est correctement completé (seulement les données string)
    if($error == 0){
        // gérer le fichier
        // vérifier si le fichier est bien là 
        // négation ! 
        if(!isset($_FILES['fichier']) || $_FILES['fichier']['error'] !== 0){
            header("Location: index.php?error=2");
            exit();
        }

        // récup le fichier
        $tmpPath = $_FILES['fichier']['tmp_name'];
        $tailleMax = 2 * 1024 * 1024;

        // vérification la taille du fichier
        if($_FILES['fichier']['size'] > $tailleMax){
            header("Location: index.php?error=3");
            exit();
        }

        // vérifcation de l'extension
        $extension = strtolower(pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION));
        $extensionAutorisees = ['jpg','jpeg','png','svg','webp','gif'];
        $mimesAutorises = [
            "jpg" => "image/jpeg",
            "jpeg" => "image/jpeg",
            "png" => "image/png",
            "svg" => "image/svg+xml",
            "webp" => "image/webp",
            "gif" => "image/gif"
        ];

    }else{
        // erreur dans le formulaire, redirection vers le form avec GET error
        header("Location: index.php?error=".$error);
        exit();
    }

}else{
    // le formulaire n'a pas été envoyé
    header("Location: index.php");
    exit();
}