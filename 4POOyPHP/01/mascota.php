<?php
/**
 *
 */
class Mascota
{
  public $color;
  public $especie;
  public $nombre;
  public $edad;

  public function jugar()
  {
    echo "Estoy jugando";
    // code...
  }
  public function comer()
  {
    echo "mmm estoy comiendo";
    // code...
  }
  public function getColor()
  {
    return $this->color;
    // code...
  }
  public function getEspecie()
  {
    return $this->especie;
    // code...
  }
  public function getNombre()
  {
    return $this->nombre;
    // code...
  }
  public function getEdad()
  {
    return $this->edad;
    // code...
  }
  public function setColor($color)
  {
    $this->color = $color;
    // code...
  }
  public function setEspecie($especie)
  {
    $this->especie = $especie;
    // code...
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
    // code...
  }
  public function setEdad($edad)
  {
    $this->edad = $edad; 
    // code...
  }
  public function describirse()
  {
    echo "Hola me llamo";
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
