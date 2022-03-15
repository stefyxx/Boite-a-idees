<?php

include("./controllers/headController.php");
include("./controllers/navController.php");

require_once("./models/classes/Groupe.php");
require_once("./models/classes/GroupeManager.php");
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

$group = new GroupeManager($bdd);
$selectOptions = $group->select();

//var_dump($selectOptions);

include("./views/pages/inscription.php");

include("./views/layouts/footer.php");

