<?php
$nomDuDossier=filter_input(INPUT_POST, "nomDuDossier");

//on créer le dossier si il n'existe pas
if (!is_dir("../Photos/$nomDuDossier")){
    mkdir("../Photos/$nomDuDossier");
}
?>