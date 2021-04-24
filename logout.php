<?php
    session_start();
    include("database.php");
    unset($_SESSION["AID"]);
    unset($_SESSION["UID"]);
    session_destroy();
    header("Location: index.php");
?>