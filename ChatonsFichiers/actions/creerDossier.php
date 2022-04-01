<?php
//verification du token
session_start();
if($_SESSION["token"] != filter_input(INPUT_POST,"token")){
    die("vilain pirate");
}
else
    $_SESSION["token"]=uniqid();

$nomDuDossier=filter_input(INPUT_POST, "nomDuDossier");

//on créer le dossier si il n'existe pas
if (!is_dir("../Photos/$nomDuDossier")){
    mkdir("../Photos/$nomDuDossier");
}
header("location: ../dossier.php?d=$nomDuDossier");
?>