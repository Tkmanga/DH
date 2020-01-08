<?php
include_once("cliente.php");
/**
 *
 */
class Multinacional extends cliente
{
  private $cuit;
  private $razonSocial;
  private $direccionFacturacion;
  function __construct($cuit, $razonSocial, $direccionFacturacion)
  {
    
  }

    /**
     * Get the value of Cuit
     *
     * @return mixed
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set the value of Cuit
     *
     * @param mixed $cuit
     *
     * @return self
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get the value of Razon Social
     *
     * @return mixed
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set the value of Razon Social
     *
     * @param mixed $razonSocial
     *
     * @return self
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get the value of Direccion Facturacion
     *
     * @return mixed
     */
    public function getDireccionFacturacion()
    {
        return $this->direccionFacturacion;
    }

    /**
     * Set the value of Direccion Facturacion
     *
     * @param mixed $direccionFacturacion
     *
     * @return self
     */
    public function setDireccionFacturacion($direccionFacturacion)
    {
        $this->direccionFacturacion = $direccionFacturacion;

        return $this;
    }

}


 ?>
