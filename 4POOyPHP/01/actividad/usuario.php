<?php
/**
 *
 */

include_once("Celular.php");
include_once("Habilidad.php");
include_once("controladorUsuario.php");

class Usuario
{
  private $nombre;
  private $mail;
  private $contrasenia;
  private $celular;
  private $habilidades = [];
  private $id;

  public function __construct($nombreUsuario, $mailUsuario, $contraseniaU, Celular $celularUsuario,Habilidad $habilidadesUser)
  {
    $this->setNombre($nombreUsuario);
    $this->setMail($mailUsuario);
    $this->setContrasenia($contraseniaU);
    $this->setCelular($celularUsuario);
    $this->setHabilidades($habilidadesUser);
  }

  public function saludar()
  {
    echo "hola $this->nombre";
  }

  public function mistrarTelefono()
  {
    $texto= "Descripcion <br> Marca: " . $this->celular->getMarca() . "<br>" . " Modelo: " . $this->celular->getModelo(). " ";
    if ($this->celular->getMarca() == "Iphone") {
      $texto .= " y soy fan de los iphone.";
    }
    return $texto;
  }

  public function sabeHacer(String $habi, int $puntaje)
  {
    $arrayDeHabilidades = $this->getHabilidades();

    foreach ($arrayDeHabilidades as $dato=>$key) {
        if ($key->getNombre()== $habi && $key->getExpertice()>$puntaje) {
          return true;
        }else {
          continue;
        }
    }
    return false;
  }
  public function guardar()
  {
    
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
    public function setHabilidades(Habilidad $habilidad)
    {
        $this->habilidades[] = $habilidad;

        return $this;
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


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}

 ?>
