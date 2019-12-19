<?php
function armarArrayUsuario($array) {
    $usuarioParaGuardar = [
        "nombre" => trim($array['nombre']),
        "email" => $array['email'],
        "password" => password_hash($array['password'], PASSWORD_DEFAULT)
    ];
    return $usuarioParaGuardar;
}
 ?>
