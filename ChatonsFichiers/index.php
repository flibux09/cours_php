<?php
$title="Gestion des chatons";
include "header.php";

?>
<h1>Bienvenue sur la gestion des chatons</h1>
<div class="container">
    <form method="post" action="actions/creerDossier.php">
        <h2>Ajouter un dossier</h2>
        <input type="text" required name="nomDuDossier">
        <input type="submit" value="OK">
    </form>
</div>
</div>
<?php
include "footer.php";
