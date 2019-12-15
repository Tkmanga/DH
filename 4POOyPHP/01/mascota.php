<?php
/**
 *
 */
 include_once("animal.php")
class Mascota extends Animal
{
  public $nombre;

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
