<?php

$d=filter_input(INPUT_POST, "d");
$destination="../Photos/$d/";
$cheminDuFichierDeDestination=$destination.basename($_FILES["fichier"]["name"]);
move_uploaded_file($_FILES["fichier"]["tp_name"], $cheminDuFichierDeDestination);
header("location: ../dossier.php?d=$d");
?>