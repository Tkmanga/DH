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

    $var = $this->getCuenta();
    if ($var instanceOf Classic) {
      $var = $this->getCuenta()->getBalance();
      $var -=100;
      $this->getCuenta()->setBalance($var);
    }elseif (Gold) {
      $var = $this->getCuenta()->getBalance();
      $apellido = strlen(self::getApellido());
      $var -=100;
      $this->getCuenta()->setBalance($var);
    }elseif (Platinum) {
      // code...
    }elseif (Black) {
      // code...
    }
  }
}

 ?>
