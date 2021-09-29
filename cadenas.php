<!DOCTYPE html>
<html>
<body>

<?php



$nombre = $_GET['nombre'];
$trim = trim($nombre, "/");
echo($trim ?: "Juan");

echo "<br>";

echo strlen($nombre);
echo "<br>";
echo strtoupper($trim);
echo "<br>";
echo strtolower($trim);

echo "<br>";

$prefijo = $_GET['prefijo'] ?? "";


$pos = strpos($nombre, $prefijo);

if ($pos === false){
    echo ("La cadena ". $prefijo ." no comienza por el mismo prefijo que " . $nombre);
}else{
    if($pos != 0){
        echo ("La cadena ". $prefijo ." no comienza por el mismo prefijo que " . $nombre);
    }else {
        echo ("La cadena empieza en el prefijo: " . $pos);
}
}

?>

</body>
</html>
      