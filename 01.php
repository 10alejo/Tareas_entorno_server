<?php

$usuarios = [
'pepe' => '1234',
"luis" => 'siul',
"admin" => 'admin'
];

$usuario = $_POST['nombre'];
$clave = $_POST['clave'];


 if( isset($usuarios[$usuario]) && $usuarios[$usuario] === $clave) {
    echo "Usuario correcto";
 } else {
    echo "Usuario incorrecto";
 }
?>