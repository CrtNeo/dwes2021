<DOCTYPE html>
<html>
<body>
<?php

$nombres = [
    'Raimon' => 'Castaño',
    'Cesar' => 'Alto',
    'Willy' => 'Moreno',
];

function ordenar($a,$b){
    return strlen($b)-strlen($a);
}

uasort($nombres, 'ordenar');
print_r($nombres);

?>
</body>
</html>