<?php
session_start();
if($_SESSION["token"] != filter_input(INPUT_POST,"token")){
    die("vilain pirate");
}
else
    $_SESSION["token"]=uniqid();

$d=filter_input(INPUT_POST,"d");
$destination ="../Photos/$d";

//il faudrait verifier que le dossier existe
$chemin=$destination."/".basename($_FILES["imageChaton"]["name"]);

//il faudrait verifier qu'une image avec le meme nom n'existe pas deja
move_uploaded_file($_FILES["imageChaton"]["tmp_name"],$chemin);

//retour a l'affichage du dossier
header("location: ../dossier.php?d=$d");