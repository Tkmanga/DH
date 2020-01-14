<?php
 /**
 *
 */
abstract class Figura
{
  protected $perimetro;
  protected $area;
  /**
   * Get the value of Perimetro
   *
   * @return mixed
   */
  public function getPerimetro()
    {
        return $this->perimetro;
    }

    /**
     * Get the value of Area
     *
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }


}


 ?>
