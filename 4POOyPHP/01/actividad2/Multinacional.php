<?php
include_once("cliente.php");
/**
 *
 */
class Multinacional extends Cliente
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

}


 ?>
