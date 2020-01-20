<?php
include_once("figura.php");
include_once("Comparable.php");
include_once("Dibujable.php");
/**
 *
 */
class Rectangulo extends Figura implements Comparable, Dibujable
{
  private $ancho;
  private $altura;

  function __construct($anchoU, $alturaU)
  {
    $this->setAncho($anchoU);
    $this->setAltura($alturaU);
  }

    public function getAncho()
    {
        return $this->ancho;
    }

    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }
    public function getPerimetro(){
      $var = 2*($this->getAncho()+$this->getAltura());
      return $var;
    }

    public function getArea(){
      $var = $this->getAncho()*$this->getAltura();
      return $var;
    }

    public function equals($objB){
      if (($this->getArea()==$objB->getArea())&&($this->getPerimetro()==$objB->getPerimetro())) {
        return "Son iguales.";
      }else {
        return "No son iguales.";
      }
    }

    public function dibujar()
    {
      $ancho = $this->getAncho();
      $alto = $this->getAltura();
      $img ="<svg width=$ancho height=$alto><rect  width=$ancho height=$alto stroke=green stroke-width=4 fill=yellow /></svg>";

      return $img;
    }

}

 ?>
