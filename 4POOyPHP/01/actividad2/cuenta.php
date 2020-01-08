<?php
/**
 *
 */
class Cuenta
{

  protected $CBU;
  protected $balance;
  protected $ultimoMovimiento[2];
  function __construct($cbu)
  {
    $this->CBU = $cbu;
  }

    /**
     * Get the value of CBU
     *
     * @return mixed
     */
    public function getCBU()
    {
        return $this->CBU;
    }

    /**
     * Set the value of CBU
     *
     * @param mixed $CBU
     *
     * @return self
     */
    public function setCBU($CBU)
    {
        $this->CBU = $CBU;

        return $this;
    }

    /**
     * Get the value of Balance
     *
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of Balance
     *
     * @param mixed $balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of Ultimo Movimiento
     *
     * @return mixed
     */
    public function getUltimoMovimiento()
    {
        return $this->ultimoMovimiento;
    }

    /**
     * Set the value of Ultimo Movimiento
     *
     * @param mixed $ultimoMovimiento
     *
     * @return self
     */
    public function setUltimoMovimiento($ultimoMovimiento)
    {
        $this->ultimoMovimiento = $ultimoMovimiento;

        return $this;
    }

    abstract public function debitar($valor,$origen)
    {
      
    }

    public function acreditar($valor,$origen)
    {
      $this->balance += $valor;
      $this->ultimoMovimiento[0]=getdate();
      $this->ultimoMovimiento[1]=$origen;
    }
}


 ?>
