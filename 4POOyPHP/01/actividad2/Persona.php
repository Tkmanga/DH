 <?php
include_once("cliente.php");
/**
 *
 */
class Persona extends Cliente implements Imprimible
{

  function __construct($nombre, $apellido, $documento, $nacimiento, $email, $pass,Cuenta $cuentaU)
  {
    parent::setNombre($nombre);
    parent::setApellido($apellido);
    parent::setDocumento($documento);
    parent::setNacimiento($nacimiento);
    parent::setEmail($email);
    parent::setPass($pass);
    parent::setCuenta($cuentaU);
  }

  public function cobrarServicios()
  {
    $acumulador=0;
    $obj = $this->getCuenta();
    if ($obj instanceOf Classic) {
      $var = $obj->getBalance();
      $var -=100;
      $this->getCuenta()->setBalance($var);
      return $var;
    }elseif ($obj instanceOf Gold) {
      $var = $obj->getBalance();
      $apellido = strlen(self::getApellido());
      for ($i=0; $i < $apellido ; $i++) {
        $acumulador = $acumulador+10;
      }
      $var -= $acumulador;
      $this->getCuenta()->setBalance($var);
      return $var;
    }elseif ($obj instanceOf Platinum) {
      $balance = $obj->getBalance();
      $var = $balance*0.10;
      $balance -= $var;
      $this->getCuenta()->setBalance($balance);
      return $var;
    }elseif ($obj instanceOf Black) {
      $balance = $obj->getBalance();
      $numDeSemana = $this->saber_numero_dia($this->getFechaUltimoMov());
      $var = 500+($numDeSemana*100);
      $balance -= $var;
      $this->getCuenta()->setBalance($balance);
      return $balance;
    }
  }

  public function getFechaUltimoMov()
  {
    $var = $this->getCuenta()->getUltimoMovimiento()[0];
    $dia = $var['yday'];
    $año = $var['year'];
    $mes = $var['mon'];
    $fecha = $año."/".$mes."/".$dia;
    return $fecha;
  }

  public function saber_numero_dia($nombredia) {
    $semana = ["","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    $var = date('l', strtotime($nombredia));
    for ($i=1; $i <=  count($semana) ; $i++) {
      if($semana[$i]==$var){
        return $i;
      }
    }

}

  public function mostrar()
  {
    return $this->getNombre()." ".$this->getApellido();
  }
}

 ?>
