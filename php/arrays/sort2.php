<DOCTYPE html>
<html>
<body>
<?php

$temperaturas = ["19", "12", "18", "22", "23", "10", "7", "20", "5", "8", "8", "17", "13", "10", "15", "21", "11", "24", "11", "25", "26", "25", "24", "20"];

$cuantasTemp = count($temperaturas);
$media = 0;

foreach($temperaturas as $temperatura){
    $media += $temperatura;

}
$total = $media/$cuantasTemp;
echo "La media de las temperaturas es de: " . $total . " grados";

echo "<br>";

sort($temperaturas);

print_r(implode(", ", array_slice($temperaturas, 0, 5)));

echo "<br>";

arsort($temperaturas);

print_r(implode(", ", array_slice($temperaturas, 0, 5)));


?>
</body>
</html>