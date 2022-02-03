<DOCTYPE html>
<html>
<body>
<?php

$colores = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');


echo "<ul>";
foreach($colores as $color => $valor){
        echo "<li><a href='". $valor . "'>" . $color . "</a></li>";
     }
echo "<ul>";

?>
</body>
</html>