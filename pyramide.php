<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pyramide</title>
</head>
<body>
<?php
function pyramide($nombre){
    echo "<table>";
    for($i=1;$i<($nombre);$i++) {
        echo "<tr>";
        for ($j=0;$j<$i;$j++){
            echo "<td>O</td>";
            if($i%$nombre==0)
                echo "</tr>";
        }

    }
    echo"</table>";
}



function pyramideDUR($nombre){
    echo "<table>";
    for($i=1;$i<($nombre);$i++) {
        echo "<tr>";

        //case vide
        for ($j=0;$j<$nombre-$i;$j++){
            echo "<td></td>";
        }

        //case pleine
        $casePleine=true;
        for ($j=0;$j<($i)*2-1;$j++){
            echo $casePleine?"<td>X</td>":"<td></td>";
            $casePleine=!$casePleine;
        }

    }
    echo"</table>";
}
//recuperation d'un parametre get
//ancienne methode
    //$etages=$_GET["nombre"];
    //pyramideDUR($etages);

//nouvelle methode
$etages=filter_input(INPUT_GET, "etages");


pyramide($etages);
echo "<hr>";
pyramideDUR($etages);

?>
</body>
</html>