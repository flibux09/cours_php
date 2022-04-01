<!doctype html>
<html lang="$">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nombre premier</title>
</head>
<body>
<?php
function nbpremier($nombre){
    if($nombre<=1)
        return false;

    for($i=2;$i<=sqrt($nombre);$i++)
        if($nombre%$i==0)
            return false;
    return true;

}
    echo "<table><tr></tr>";

    for ($i=1;$i<=20;$i++){
        echo nbpremier($i)?"<td style='color:orangered'>$i</td>":"<td>$i</td>";

        if($i%5==0)
            echo "<tr></tr>";

    }

    echo"</tr></table>"
?>
</table>
</body>
</html>