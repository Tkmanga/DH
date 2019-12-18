<?php
/**
 *
 */
class Habilidad
{
  private $nombre;
  private $expertice;

  public function __construct($nombreUser, $experticeUser)
  {
    $this->setNombre($nombreUser);
    $this->setExpertice($this->validarNum($experticeUser));
  }
  public function validarNum($value)
  {
    if ($value>=0 && $value<=5) {
      return $value;
    }else {
      return null;
    }
  }
    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of Expertice
     *
     * @return mixed
     */
    public function getExpertice()
    {
        return $this->expertice;
    }

    /**
     * Set the value of Expertice
     *
     * @param mixed $expertice
     *
     * @return self
     */
    public function setExpertice($expertice)
    {
        $this->expertice = $expertice;

        return $this;
    }

}
 ?>
