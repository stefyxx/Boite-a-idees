<?php

include(__DIR__."/../controllers/headController.php");

include(__DIR__."/../controllers/navController.php");

if(isset($er_message))
{
    echo "<h1>Erreur</h1> <p>". $er_message ."</p>";
}
else
{
    echo "<h1>Erreur</h1> <p>Nous avons rencontré un problème.</p>";
}

include(__DIR__."/layouts/footer.php");