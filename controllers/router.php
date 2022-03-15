<?php

if (isset($_GET["action"]))
{
    switch ($_GET["action"]) {
        case "login":
            include("./controllers/loginController.php");
            break;
        case "loginForm":
            include("./controllers/loginFormController.php");
            break;
        case "inscription":
            include("./controllers/inscriptionController.php");
            break;
        case "accueil":
            include("./controllers/accueilController.php");
            break;
        case "humeur":
            include("./controllers/humeurController.php");
            break;
        case "humeur-formulaire":
            include("./controllers/humeurFormController.php");
            break;
        case "suggestions":
            include("./controllers/suggestionController.php");
            break;
        case "profile":
            include("./controllers/profileController.php");
            break;
        case "logout":
            include("./controllers/logoutController.php");
            break;
        case "erreur":
            include("./views/erreur.php");
            break;
    }
}
// elseif (isset($_POST))
// {
//     include("./controllers/inscriptionFormController.php");
// }
else
{
    include("./controllers/accueilController.php");
}

