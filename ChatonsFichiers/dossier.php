<?php
//on ne fait pas d'écho directe d'une variable récupéré dans un GET ou un POST
//on utilise htmlentities pour eviter les injection sql
$d=filter_input(INPUT_GET,"d");

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
                        </div>
                    </div>
                    <?php
                    }
            }
            ?>
        </div>
    </div>
<?php
include "footer.php";
