<?php
/**
 *
 */

include_once("celular.php");
include_once("Habilidad.php");

class Usuario
{
  private $nombre;
  private $mail;
  private $contrasenia;
  private $celular;
  private $habilidades = [];

  public function __construct($nombreUsuario, $mailUsuario, $contraseniaU, Celular $celularUsuario)
  {
    $this->setNombre($nombreUsuario);
    $this->setMail($mailUsuario);
    $this->setContrasenia($contraseniaU);
    $this->setCelular($celularUsuario);

  }

  public function saludar()
  {
    echo "hola $this->nombre";
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombreUsuario)
  {
    $this->nombre=$nombreUsuario;
  }

  public function getMail()
  {
    return $this->mail;
  }
  public function setMail($mailUsuario)
  {
    $this->mail=$mailUsuario;
  }

  public function getContrasenia()
  {
    return $this->contrasenia;
  }
  public function setContrasenia($contraseniaUsuario)
  {
    $this->contrasenia = $this->encriptarContrasenia($contraseniaUsuario);
  }
  public function getCelular(){
    return $this->celular;
  }

  public function setCelular(Celular $celularUsuario){
    $this->celular=$celularUsuario;
  }
  private function encriptarContrasenia($passAEncriptar){
    return password_hash($passAEncriptar , PASSWORD_DEFAULT);
  }

  public function mistrarTelefono()
  {
    $texto= "Descripcion <br> Marca: " . $this->celular->getMarca() . "<br>" . " Modelo: " . $this->celular->getModelo(). " ";
    if ($this->celular->getMarca() == "Iphone") {
      $texto .= " y soy fan de los iphone.";
    }
    return $texto;
  }

  public function llamar(Usuario $elOtro, int $tiempoEnSeg)
  {
    $costo = "$ ";
    if ($this->celular->getProveedor() == $elOtro->celular->getProveedor() ) {
      $costo .= 0;
      return $costo;
    }else {
      $tiempoEnMin = $tiempoEnSeg/60;
      $costo .= ($tiempoEnMin*10);
      return $costo;
    }
  }

    /**
     * Get the value of Habilidades
     *
     * @return mixed
     */
    public function getHabilidades()
    {
        return $this->habilidades;
    }

    /**
     * Set the value of Habilidades
     *
     * @param mixed $habilidades
     *
     * @return self
     */
    public function setHabilidades($habilidad)
    {
        $this->habilidades[] = $habilidades;

        return $this;
    }

}

 ?>
