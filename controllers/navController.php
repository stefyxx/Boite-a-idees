<?php

if(isset($_SESSION["pseudo"])) 
{
    include(__DIR__."/../views/layouts/nav-session.php");
}
else 
{
    include(__DIR__."/../views/layouts/nav-nosession.php");
}

