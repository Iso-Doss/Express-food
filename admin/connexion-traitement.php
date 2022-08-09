<?php

$erreurs = [];

$success = [];

if(
    !isset($_POST["addresse-email"]) ||
    empty($_POST["addresse-email"]) ||
    !filter_var($_POST["addresse-email"], FILTER_VALIDATE_EMAIL)
){

    $erreurs["addresse-email"] = "Votre addresse mail est vide ou incorrect.";

}

if(
    !isset($_POST["mot-de-passe"]) ||
    empty($_POST["mot-de-passe"])
){

    $erreurs["mot-de-passe"] = "Votre mot de passe est vide ou incorrect.";
    
}



header("location: connexion.php?erreurs=" . json_encode($erreurs) ."&success=". json_encode($success));