<?php
include_once("Suma.php");
include_once("Resta.php");
include_once("Multiplicacion.php");
include_once("Division.php");
include_once("opf.php");
include_once("calculadoraEnteros.php");
/**
 *
 */

class Calculadora
{
  private $operacion;
  private $num1;
  private $num2;
  public $objetOperacion=1;

  function __construct($operacionU, $num1U,$num2U)
  {
    $this->setOperacion($operacionU);
    $this->setNum1($num1U);
    $this->setNum2($num2U);

  }

  /*
  public function makeOperacion()
  {
    if ($this->getOperacion()==constant("SUMA")) {
      $this->objetOperacion = new Suma();
    }elseif ($this->getOperacion()==constant("RESTA")) {
      $this->objetOperacion = new Resta();
    }elseif ($this->getOperacion()==constant("MULTIPLICACION")) {
      $this->objetOperacion = new Multiplicacion();
    }elseif ($this->getOperacion()==constant("DIVISION")) {
      $this->objetOperacion = new Division();
    }
  }
*/

  public function operar()
  {
    $opf = new OperacionFactory();
    $this->objetOperacion = $opf->make($this->getOperacion());
    return $this->objetOperacion->operar($this->getNum1(),$this->getNum2());
  }

  public function operarEntero()
  {
    $opf = new OperacionFactory();
    $entero = new CalculadoraEnteros();
    $this->objetOperacion = $opf->make($this->getOperacion());
    $resultado = $entero->operacion($this->objetOperacion->operar($this->getNum1(),$this->getNum2()));
    return $resultado;
  }
    public function setNum1($num1)
    {
        $this->num1 = $num1;
        return $this;
    }

    public function setNum2($num2)
    {
        $this->num2 = $num2;
        return $this;
    }

    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
        return $this;
    }

    public function getOperacion()
    {
        return $this->operacion;
    }

    public function getNum1()
    {
        return $this->num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

}

 ?>
