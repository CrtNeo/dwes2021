<DOCTYPE html>
<html>
<body>
<?php

function longitud($array)
{
  return strlen($array);
}


$nombres = ["alejandro", "cesar", "raimon"];

$longitudMax =  array_map("longitud", $nombres);

echo "La cadena de longitud maxima es de:  " . max($longitudMax);

echo "<br>";

$longitudMin =  array_map("longitud", $nombres);

echo "La cadena de longitud minima es de:  " . min($longitudMin);

?>
</body>
</html>