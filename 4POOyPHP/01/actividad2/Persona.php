<?php
include_once("cliente.php");
/**
 *
 */
class Persona extends cliente
{

  function __construct($nombre, $apellido, $documento, $nacimiento, $email, $pass)
  {
    parent::setNombre($nombre);
    parent::setApellido($apellido);
    parent::setDocumento($documento);
    parent::setNacimiento($nacimiento);
    parent::setEmail($email);
    parent::setPass($pass);
  }
}

 ?>
