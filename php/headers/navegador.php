
<DOCTYPE html>
<html>
<body>
<?php

$browser  = $_SERVER['HTTP_USER_AGENT'];

        if (strpos($browser,'Mozilla') !== false) {
            echo 'Estas en la pagina usando Firefox';
        } else {
              echo 'Cuidado, no estas usando Firefox';
            }

            ?>
</body>
</html>