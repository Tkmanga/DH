<?php
/**
 *
 */
class Animal
{

    private $color;
    private $especie;
    private $edad;

    public function __construct($especie,$edad){
      $this->especie=$especie;
      $this->edad=$edad;
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

    public function setEdad($edad)
    {
      $this->edad = $edad;
      // code...
    }

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
}


 ?>
