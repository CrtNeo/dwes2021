<?php

$usuario = $_GET["usuario"];
$clave = $_GET["clave"];

if($usuario == "pepe" && $clave == "hola"){
    echo "Usuario correcto";
}else{
    echo "Usuario incorrecto";
}
