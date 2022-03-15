<?php

session_start();

$pseudo;
$password; //select compare not header login controller with error message

$_SESSION["pseudo"] = "Myriam";

if(isset($_SESSION["pseudo"]))
{
    header("Location: ../accueil.php");
    die();
}
