<?php
include_once("figura.php");
include_once("Comparable.php");
/**
 *
 */
class Circulo extends Figura implements Comparable
{
  private $radio;
  function __construct($diametro)
  {
    $this->setRadio($diametro);
  }
  public function getPerimetro()
  {
    $var = 2*pi()*$this->getRadio();
    return $var;
  }

  public function getArea()
  {
    $var = pi()*($this->getRadio()**2);
    return $var;
  }
    public function getRadio()
    {
        return $this->radio;
    }

    public function setRadio($d)
    {
        $this->radio = $d/2;

        return $this;
    }

  public function equals($obj)
  {
    if (($this->getPerimetro()==$obj->getPerimetro())&&($this->getArea()==$obj->getArea())) {
      return "Son iguales.";
    }else {
      return "No son iguales.";
    }
  }

}

 ?>
