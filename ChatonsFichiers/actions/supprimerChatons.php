<?php

$d=filter_input(INPUT_POST,"d");
$image = filter_input(INPUT_POST, "image");


session_start();

    $_SESSION["token"]=uniqid();

unlink("../Photos/$d/$image");
header("location: ../dossier.php?d=$d");