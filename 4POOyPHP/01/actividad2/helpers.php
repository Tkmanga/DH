<?php
// Esta funcion nos ayuda a imprimir el contenido en un formato tabulado para que se comprenda mejor
function pre($algo) {
    echo '<pre>';
    var_dump($algo);
    echo '</pre>';
}

// Dump and Die imprime hasta donde esta y el resto lo ignora
function dd($algo) {
    pre($algo);
    exit;
}

/*
function validarRegistracion($unArray) {}
function armarArrayUsuario() {}
function abrirBBDD($unArchivo) {}
*/

?>
