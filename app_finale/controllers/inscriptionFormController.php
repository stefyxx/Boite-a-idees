<?php

//Check if pseudo and email aren't already in db - profilemanager so require_once
//Each time redirect to default error if not the case
//All clear means we can insert - create hash and crypt password
//Session now uses values
//Redirect to homepage

require_once("./models/classes/Profile.php");
require_once("./models/classes/Groupe.php");
require_once("./models/classes/ProfileManager.php");
include_once("./models/config/db.php");


try {
    $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
        ';dbname=' . DBNAME . ';charset='
        . DBCHARSET, DBUSER, DBAPSS);
} catch (Exception $e) {
    $er_message = "Impossible de se connecter à la base de données";
    include("./views/erreur.php");
    die();
}

$profile = new ProfileManager($bdd);

var_dump($profile->selectUserParEmail($_POST["email"]));

if (!empty($_POST))
{
    if(empty($_POST["groupe"]))
    {
        $er_message = "Veuillez sélectionner un groupe.";
        include("./views/erreur.php");
        die();
    }
    if(empty($_POST["email"]))
    {
        $er_message = "Veuillez entrez un email.";
        include("./views/erreur.php");
        die();
    }
    if(empty($_POST["pseudo"]))
    {
        $er_message = "Veuillez entrer un pseudo.";
        include("./views/erreur.php");
        die();
    }
    if(empty($_POST["password"]))
    {
        $er_message = "Veuillez entrer un mot de passe.";
        include("./views/erreur.php");
        die();
    }

}

// $id;
// $pseudo;
// $email;
// $password;
// $_POST["confPassword"];


echo "ok";
// header("Location: ?action=accueil");
// die();
