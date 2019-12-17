<?php
/**
 *
 */
 include_once("animal.php");
 include_once("jugable.php");

class Mascota extends Animal implements Jugable
{
  public $nombre;

  public function __construct($nombreMascota, $especieMascota,$edad=null)
  {
    $this->nombre=$nombreMascota;
    parent::__construct($especieMascota,$edad);
    //la palabra clave parent permite ejecutar el constructor del padre
  }
  public function getNombre()
  {
    return $this->nombre;
    // code...
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
    // code...
  }

  public function jugar(){
    echo "juego como una mascota <br>";
  }

  public function jugarConJuguete($juguete){
    echo "juego como una mascota con su ".$juguete;
  }

  public function describirse()
  {
    echo "Hola me llamo ";
    echo $this->nombre;
    echo "<br>";

    if ($this->edad) {
      echo "Tengo ".$this->edad." años";
      echo "<br>";
    }
    // code...
  }
}

 ?>
