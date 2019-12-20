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
  static $contadorId=1;

  public function __construct($nombreUsuario, $mailUsuario, $contraseniaU, Celular $celularUsuario,Habilidad $habilidadesUser)
  {
    $this->setNombre($nombreUsuario);
    $this->setMail($mailUsuario);
    $this->setContrasenia($contraseniaU);
    $this->setCelular($celularUsuario);
    $this->setHabilidades($habilidadesUser);
    $this->id=Usuario::$contadorId++;


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
    $elUsuario = armarArrayUsuario($this);
    $elUsuario = json_encode($elUsuario);
    file_put_contents('BD.json', $elUsuario . PHP_EOL, FILE_APPEND);
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
  public function getDatos()
  {
    $datosCelular = [
      "marca" => $this->celular->getMarca(),
      "modelo" => $this->celular->getModelo(),
      "proveedor" => $this->celular->getProveedor(),
      "numero" => $this->celular->getNumero()
    ];
    return $datosCelular;
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
    public function getArrayHabilidades()
    {
        $aux = $this->getHabilidades();
        $arrayHabilidades = [];
        for ($i=0; $i < count($aux) ; $i++) {

          $aux2 = [
            "nombre" => $aux[$i]->getNombre(),
            "expertice" => $aux[$i]->getExpertice()
          ];
          $arrayHabilidades[$i] = $aux2;
        };
        return $arrayHabilidades;
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


    public function getId()
    {
        return $this->id;
    }

}

 ?>
