<?php
/**
 *
 */

 include_once("mascota.php");
 include_once("jugable.php");
class Persona implements Jugable
{

  private $nombre;
  private $apellido;
  private $edad;
  private $hobbies;
  private $mascota;

  public function __construct($nombreUsuario, $apellidoUsuario)
  {
    $this->nombre=$nombreUsuario;
    $this->apellido=$apellidoUsuario;
  }

  public function getMascota() : Mascota
  {
    return $this->mascota;
  }
  public function getHobbies() : Array
  {
    return $this->hobbies;
  }
  public function getName() : String
  {
    return $this->nombre;
  }
  public function getApellido() : String
  {
    return $this->apellido;
  }
  public function getEdad() : Integer
  {
    return $this->edad;
  }
  public function setMascota(Mascota $mascota)
  {
    $this->mascota = $mascota;
  }
  public function setHobby(String $hobby)
  {
    $this->hobbies[]=$hobby;
  }
  public function setName(String $nombreUsuario)
  {
    $this->nombre=$nombreUsuario;
  }
  public function setApellido(String $apellidoUsuario)
  {
    $this->apellido=$apellidoUsuario;
  }
  public function setEdad(Integer $edadUsuario)
  {
    $this->edad=$edadUsuario;
  }
  public function jugar()
  {
    echo "Juego como un humano";
  }
  public function jugarConJuguete($juguete){
    echo "juego con un ".$juguete." <br>";
  }
}

 ?>
