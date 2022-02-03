<DOCTYPE html>
<html>
<body>
<?php

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    $password = "";
    for($i = 0; $i < 1; $i++){
       $password .= chr(rand(65, 90));
    }

    for($j = 0; $j < 5; $j++){
        $password .= chr(rand(97, 122));
    }

    for($k = 0; $k < 3; $k++){
        $password .= chr(rand(48, 57));
    }

    for($l = 0; $l < 2; $l++){
        $password .= chr(rand(33, 47));
    }
    echo str_shuffle($password);
 }
rand_Pass();

?>
</body>
</html>