<?php
include_once("Usuario.php");
include_once("Celular.php");

function armarArrayUsuario(Usuario $user) {
    $usuarioParaGuardar = [
        "id"=> $user->getId(),
        "nombre" => trim($user->getNombre()),
        "email" => $user->getMail(),
        "password" => $user->getContrasenia(),
        "celular"=> $user->getDatos(),
        "habilidades"=> $user->getArrayHabilidades()
    ];
    return $usuarioParaGuardar;
}
 ?>
