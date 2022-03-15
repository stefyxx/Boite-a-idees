<?php

include("./controllers/headController.php");
include("./controllers/navController.php");

if(isset($_SESSION["pseudo"])) 
{
    $pseudo = $_SESSION["pseudo"];
    include("./views/pages/suggestion.php");
}
else 
{
    include("./views/pages/suggestion-lecture.php");
}

include("./views/layouts/footer.php");

