<?php

include("./controllers/headController.php");
include("./controllers/navController.php");


if(isset($_SESSION["pseudo"])) 
{
    include("./views/pages/accueil-session.php");
}
else 
{
    include("./views/pages/accueil-nosession.php");
}

include("./views/layouts/footer.php");

