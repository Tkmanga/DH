<?php
/**
 *
 */
class Celular
{
  private $marca;
  private $modelo;
  private $proveedor;
  private $numero;

    public function __construct($marcaCelular, $modeloCelular, $proveedorCelular, $numeroCelular)
    {
      $this->marca = $marcaCelular;
      $this->modelo = $modeloCelular;
      $this->proveedor = $proveedorCelular;
      $this->numero = $numeroCelular;
    }

    /**
     * Get the value of Marca
     *
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of Marca
     *
     * @param mixed $marca
     *
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

    }

    /**
     * Get the value of Modelo
     *
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of Modelo
     *
     * @param mixed $modelo
     *
     * @return self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of Proveedor
     *
     * @return mixed
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set the value of Proveedor
     *
     * @param mixed $proveedor
     *
     * @return self
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get the value of Numero
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of Numero
     *
     * @param mixed $numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

}

 ?>
