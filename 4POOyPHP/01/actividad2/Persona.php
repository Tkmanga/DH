<?php
include_once("cliente.php");
/**
 *
 */
class Persona extends Cliente
{

  function __construct($nombre, $apellido, $documento, $nacimiento, $email, $pass,Cuenta $cuentaU)
  {
    parent::setNombre($nombre);
    parent::setApellido($apellido);
    parent::setDocumento($documento);
    parent::setNacimiento($nacimiento);
    parent::setEmail($email);
    parent::setPass($pass);
    parent::setCuenta($cuentaU);
  }
}

 ?>
