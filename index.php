<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les bases</title>
</head>
<body>
    <?php
    //Variables
    $toto = 5;
    $toto = "fffdvfr";

    //Chaine de caractere
    $toto = "Avec guillemets";
    $toto = 'Avec apostrophe';

    //La difference est sur la concatenation
    $uneChaine = 'truc';
    $unAutreChaine = $uneChaine.'<br>';
    $unAutreChaine = $uneChaine."<br>";

    //Quand on est avec des guillemets
    $unAutreChaine = "$uneChaine<br>";

    //nom de variable dynamique
    $mavariable='uneChaine';
    echo $$mavariable; //cela afficher la variable $uneChaine

    //tableaux
    //se sont plus des dictionnaires
    $tab1=array(3,7,9,5);
    $tab2=[3,7,9,5];
    //comme non typé
    $tab3=[3,"truc",2];
    echo $tab3[1]; //accède à la case d'index 1 "truc"

    //declaration decoupe
    $tab4[0]="toto";
    $tab4[1]="titi";
    $tab4[2]="tata"; //il trouve seul l'index à faire
    $tab4["machin"] = "truc";
    $tab4[]="tutu";
    $tab4[200]=5; //On peut mettre une valeur n'importe où

    //tres utile pour le debugage
    var_dump($tab4);

    //Conditions
    if ($toto=="truc"){
        echo "toto est égal à truc";
    }
    else {
        echo "toto n'est pas egal a truc";
    }

    echo $toto=="truc"?"oui":"non";

    //Boucles
    for($i=0;$i<10;$i++){
        echo "$i<br>";
    }
    echo "<hr>";
    $n=2;
    while($n<1000){
        echo "$n<br>";
        $n*=2;
    }
    echo "<hr>";

    //boucle pour les tableaux
    foreach ($tab1 as $value){
        echo "$value<br>";
    }
    echo "<hr>";

    foreach ($tab4 as $key=>$value){
        echo "$key : $value<br>";
    }
    echo "<hr>";

    //Fonctions
    function afficherBonjour(){
        echo "Bonjour<br>";
    }

    //appel d'une fonction
    afficherBonjour();

    function estDivisiblePar($nombre, $diviseur){
        return $nombre%$diviseur==0;
    }
    for ($i=0;$i<50;$i++)
        echo estDivisiblePar($i,3)?"$i est divisible par 3<br>" : "$i n'est pas divisible par 3<br>";

    ?>
</body>
</html>