<DOCTYPE html>
<html>
<body>
<?php

function partlist($length, $array){
    for($i = 0; $i < $length - 1; $i++){
        $cadena = implode(" " , array_slice($array, 0, $i + 1));
        $cadena2 = implode(" ", array_slice($array, $i + 1, $length));
        $cadenas = [$cadena, $cadena2];
        print_r($cadenas);
        echo "<br>";
    }
}

$cadena = ["Seguro", "que", "apruebo", "esta", "asignatura"];
$longitudCadenas = count($cadena);
partlist($longitudCadenas, $cadena);

?>
</body>
</html>