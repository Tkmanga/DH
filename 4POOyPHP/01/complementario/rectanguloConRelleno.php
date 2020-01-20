<?php
include_once("rectangulo.php");
include_once("Dibujable.php");
/**
 *
 */
class RectanguloConRelleno extends Rectangulo implements Dibujable
{
  private $color;
  function __construct($anchoU,$alturaU,$colorU)
  {
    $this->setColor($colorU);
    parent::setAncho($anchoU);
    parent::setAltura($alturaU);
  }

    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function dibujar()
    {
      $ancho = parent::getAncho();
      $alto = parent::getAltura();
      $color = $this->getColor();
      $img ="<svg width=$ancho height=$alto><rect  width=$ancho height=$alto stroke=green stroke-width=4 fill=$color /></svg>";

      return $img;

    }

}

 ?>
