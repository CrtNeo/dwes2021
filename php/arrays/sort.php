<DOCTYPE html>
<html>
<body>
<?php

$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");


ksort($edades);

foreach($edades as $nombre => $edad){
    echo $nombre;
    echo "\n";
}
echo "<br>";


asort($edades);

foreach($edades as $nombre => $edad){
    echo $edad;
    echo "\n";
}
echo "<br>";


krsort($edades);

foreach($edades as $nombre => $edad){
    echo $nombre;
    echo "\n";
}
echo "<br>";


arsort($edades);

foreach($edades as $nombre => $edad){
    echo $edad;
    echo "\n";
}
echo "<br>";





?>
</body>
</html>