<?php

include_once("cuenta.php");
include_once("imprimible.php");
abstract class Cliente{
  Protected $nombre;
  Protected $apellido;
  Protected $documento;
  Protected $nacimiento;
  Protected $email;
  Protected $pass;
  Protected $cuenta;

//Creo una función constructora con sus parámetros necesarios

  function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass, Cuenta $cuenta ){
    $this->setNombre($nombre);
    $this->setApellido($apellido);
    $this->setDocumento($documento);
    $this->setNacimiento($nacimiento);
    $this->setEmail($email);
    $this->setPass($pass);
    $this->setCuenta($cuenta);
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

  public function setCuenta(Cuenta $cuentaUsuario)
  {
    $this->cuenta=$cuentaUsuario;
  }

  public function getCuenta()
  {
    return $this->cuenta;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }
}
