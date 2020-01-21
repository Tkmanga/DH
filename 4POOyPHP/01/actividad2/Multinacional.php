<?php
include_once("cliente.php");
include_once("liquidable.php");
/**
 *
 */
class Multinacional extends Cliente implements Liquidable, Imprimible
{
  private $cuit;
  private $razonSocial;
  private $direccionFacturacion;

  function __construct($cuitE, $razonSocial, $direccionFacturacion,$nacimiento, $nombre, $pass, $email, Cuenta $cuenta)
  {
    parent::setNombre($nombre);
    parent::setNacimiento($nacimiento);
    parent::setEmail($email);
    parent::setPass($pass);
    $this->cuit=$cuitE;
    $this->razonSocial=$razonSocial;
    $this->direccionFacturacion=$direccionFacturacion;
    parent::setCuenta($cuenta);
  }


    public function getCuit()
    {
        return $this->cuit;
    }


    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }


    public function getRazonSocial()
    {
        return $this->razonSocial;
    }


    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }


    public function getDireccionFacturacion()
    {
        return $this->direccionFacturacion;
    }

    public function setDireccionFacturacion($direccionFacturacion)
    {
        $this->direccionFacturacion = $direccionFacturacion;
        return $this;
    }


    public function cobrarServicios()
    {
      //$var = $this->getCuenta()->getBalance();
      //$var -=100;
      //$this->getCuenta()->setBalance($var);
      $var = $this->getCuenta();
      if ($var instanceOf Classic) {
        return true;
      }elseif (Gold) {
        // code...
      }elseif (Platinum) {
        // code...
      }elseif (Black) {
        // code...
      }
    }


    public function liquidarHaberes(Persona $persona, $sueldo){
        $persona->getCuenta()->acreditar($sueldo);
        $var = $this->getCuenta()->getBalance();
        $var -= $sueldo+500;
        $this->getCuenta()->setBalance($var);
        return $persona->getCuenta()->getBalance();
    }
    public function mostrar()
    {
      return $this->getRazonSocial();
    }

}


 ?>
