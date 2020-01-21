 <?php
include_once("cliente.php");
/**
 *
 */
class Persona extends Cliente
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
      $balance = $obj->getUltimoMovimiento();
      $date = '2016/09/26';
      $weekday = date('|',strtotime($date));
      return $weekday;
    }
  }
}

 ?>
