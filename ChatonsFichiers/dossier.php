<?php
$token=uniqid();
$_SESSION["token"]=$token;
//on ne fait pas d'écho directe d'une variable récupéré dans un GET ou un POST
//on utilise htmlentities pour eviter les injection sql
$d=filter_input(INPUT_GET,"d");
$delete=filter_input(INPUT_GET, "delete");
//testons l'existance du dossier
if (!is_dir("Photos/$d")){
    //renvoyer une error 404
    http_response_code(404);
    die();
}

$title="Les chatons du dossier $d";
include "header.php";

?>

<h1>Les chatons du dossier <?php echo htmlentities($d)?></h1>

    <div class="container">
        <div class="row">
            <?php
            $images = scandir("Photos/$d");
            foreach ($images as $image) {
                if($image!="." && $image!=".." && is_file("Photos/$d/$image")){

            ?>
                    <div class="col col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo "Photos/$d/$image" ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">voici un chat</p>
                            </div>
                            <form method="post" action="actions/supprimerChatons.php">
                                <input type="hidden" name="d" value="<?php echo $d?>">
                                <input type="hidden" name="token" value="<?php echo $token ?>">
                                <input type="hidden" name="image" value="<?php echo $image ?>">
                                <input type="submit" name="delete" value="X">
                            </form>
                        </div>
                    </div>
                    <?php
                    }
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form method="post" action="actions/ajouterChaton.php" enctype="multipart/form-data">
                <h2>Ajoutez un chaton</h2>
                <input type="file" required name="imageChaton" accept=".png,.jpg,.jpeg,.gif,.jfif">
                <input type="hidden" name="d" value="<?php echo $d?>">
                <input type="submit" value="Valider">
                <input type="hidden" name="token" value="<?php echo $token ?>">
            </form>
        </div>
    </div>
<?php
include "footer.php";
