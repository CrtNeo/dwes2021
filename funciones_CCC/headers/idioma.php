<DOCTYPE html>
<html>
<body>
<?php

    $idioma = $_GET["idioma"] ?? "";

    if ($idioma == "en"){

        $content = "This page is in English";

    }else if ($idioma == "es"){

        $content = "Esta página está en Castellano (Idioma por defecto)";

    }else if ($idioma == "ca"){

        $content = "Aquesta pagina està en valencià";

    }else{
        $content = "Esta página está en Castellano (Idioma por defecto)";
    }

    echo $content;

?>
</body>
</html>