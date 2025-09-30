<?php
session_start();

if(isset($_GET["user"]))
{
    if($_GET["user"] == "gavin")
    {
        $_SESSION["gLogin"] = 1;
        $_SESSION["eLogin"] = 0;
    }
    elseif($_GET["user"] == "erin")
    {
        $_SESSION["eLogin"] = 1;
        $_SESSION["gLogin"] = 0;
    }

    header("Location: ../view/home.php");
}
?>