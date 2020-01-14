<?php
include_once("figura.php");
/**
 *
 */
class Rectangulo extends Figura
{
  private $ancho;
  private $altura;

  function __construct($anchoU, $alturaU)
  {
    self::setAncho($anchoU);
    self::setAltura($alturaU);
  }

    /**
     * Get the value of Ancho
     *
     * @return mixed
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set the value of Ancho
     *
     * @param mixed $ancho
     *
     * @return self
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get the value of Altura
     *
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of Altura
     *
     * @param mixed $altura
     *
     * @return self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

}

 ?>
