<?php
function usuarioOk($usuario, $contraseña): bool {
    return (strlen($usuario) >= 8 && $usuario == strrev($contraseña));
}

function contarPalabras($cadena) {
    return str_word_count($cadena, 0);
}

function letraMasrepetida($cadena) {
    $vecesMax = 0;
    $letraMax = 'a';
    $tamaño = strlen($cadena);
    for ($i = 0; $i < $tamaño; $i++) {
        $veces = 1;
        $letrai = $cadena[$i];
        for ($j = $i + 1; $j < $tamaño; $j++) {
            if ($letrai == $cadena[$j]) {
                $veces++;
            }
        }
        if ($veces > $vecesMax) {
            $letraMax = $letrai;
            $vecesMax = $veces;
        }
    }
    return $letraMax;
}

function palabraMasrepetida($cadena) {
    $palabras = str_word_count($cadena, 1);
    $palabrasveces = array_count_values($palabras);
    asort($palabrasveces);
    return array_key_last($palabrasveces);
}

function limpiarEntrada(&$cadena) {
    $cadena = htmlspecialchars($cadena);
}
?>
