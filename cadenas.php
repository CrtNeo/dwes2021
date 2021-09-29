<DOCTYPE html>
<html>
<body>
<?php
$nombre = $_GET["nombre"];
$trim = trim($nombre, "/");
echo $trim ?: "Jose";
echo "<br>";
echo "La longitud de la cadena es: " . strlen($nombre);
echo "<br>";
echo "Mayusculas: " . strtoupper($nombre);
echo "<br>";
echo "Minusculas: " . strtolower($nombre);
echo "<br>";
$prefijo = $_GET["prefijo"] ?? "";
$strpos = strpos($nombre, $prefijo);
if($strpos === false){
    echo "El nombre " . $nombre . " no comienza con el prefijo " . $prefijo;
}else{
    if($strpos != 0){
        echo "El nombre no comienza con el prefijo";
    }else{
        echo "El nombre comienza con el prefijo";
    }
}
echo "<br>";

$a = substr_count(strtolower($nombre), "a");
echo "La cadena tiene " . $a ." a"; 
echo "<br>";

$pos = stripos(strtolower($nombre),'a');

if($pos == null){
    echo "No hay ninguna a";
}else{
    echo "La primera a esta en la posicion " . $pos;
}
echo "<br>" . "<br>";

$reemplazar = str_ireplace('o',0,$nombre);
echo "Cadena normal: " . $nombre . "<br>" . "Cadena cambiada: " . $reemplazar;
echo "<br>" . "<br>";

$url = 'http://username:password@hostname:9090/path?arg=value';
echo "Protocolo: " . parse_url($url, PHP_URL_SCHEME);
echo "<br>";
echo "Nombre de usuario: " . parse_url($url, PHP_URL_USER);
echo "<br>";
echo "Path: " . parse_url($url, PHP_URL_PATH);
echo "<br>";
echo "Querystring: " . parse_url($url, PHP_URL_QUERY);

?>
</body>
</html>