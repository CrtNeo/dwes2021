<DOCTYPE html>
<html>
<body>
<?php

$id = $_GET["id"] ?? "";

$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

if(array_key_exists($id, $productos) == false){
    http_response_code(404);
    echo "El producto numero ". $id ." no se encuentra en los productos";
}else{
    echo "El producto numero ". $id . "se encuentra en los productos";
}


?>
</body>
</html>
