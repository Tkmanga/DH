<?php
include_once("figura.php");
include_once("Comparable.php");
/**
 *
 */
class Triangulo extends Figura implements Comparable
{
  private $ladoA;
  private $ladoB;
  private $ladoC;
  function __construct($ladoAU, $ladoBU, $ladoCU)
  {
    $this->setLadoA($ladoAU);
    $this->setLadoB($ladoBU);
    $this->setLadoC($ladoCU);
  }

  public function getPerimetro()
  {
    $a = $this->getLadoA();
    $b = $this->getLadoB();
    $c = $this->getLadoC();
    $var;
    if ($a==$b && $b==$c) {
      $var = 3*$a;
      return $var;
    }elseif ($a!=$b && $b!=$c) {
      $var = $a+$b+$c;
      return $var;
    }else{
      if ($a == $b ) {
        $var = (2*$a)+$c;
        return  $var;
      }elseif ($b==$c) {
        $var = (2*$b)+$a;
        return $var;
      }elseif ($c==$a) {
        $var = (2*$c)+$b;
        return $var;
      }
    }
  }

  public function getArea()
  {
    $a = $this->getLadoA();
    $b = $this->getLadoB();
    $c = $this->getLadoC();
    $var;
    if ($a==$b && $b==$c) {
      $var = (sqrt(3)/4)*($a**2);
      return $var;
    }elseif ($a!=$b && $b!=$c) {
      $s = $this->semi($a, $b, $c);
      $var = (sqrt($s*($s-$a)*($s-$b)*($s-$c)));
      return $var;
    }else{
      if ($a == $b ) {
        $var = ($c*sqrt(($a**2)-(($c**2)/4)))/2;
        return  $var;
      }elseif ($b==$c) {
        $var = ($a*sqrt(($b**2)-(($a**2)/4)))/2;
        return $var;
      }elseif ($c==$a) {
        $var = ($b*sqrt(($a**2)-(($b**2)/4)))/2;
        return $var;
      }
    }
  }

  private function semi($a, $b, $c){
    $s = ($a+$b+$c)/2;
    return $s;
  }

    public function getLadoA()
    {
        return $this->ladoA;
    }


    public function setLadoA($ladoA)
    {
        $this->ladoA = $ladoA;

        return $this;
    }

    public function getLadoB()
    {
        return $this->ladoB;
    }

    public function setLadoB($ladoB)
    {
        $this->ladoB = $ladoB;

        return $this;
    }

    public function getLadoC()
    {
        return $this->ladoC;
    }

    public function setLadoC($ladoC)
    {
        $this->ladoC = $ladoC;

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
