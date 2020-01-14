<?php
 /**
 *
 */
class Operacion
{
  private $var1;
  private $var2;

  function __construct($val1,$val2)
  {
    self::setVar1($val1);
    self::setVar2($val2);
  }

    /**
     * Get the value of Var
     *
     * @return mixed
     */
    public function getVar1()
    {
        return $this->var1;
    }

    /**
     * Set the value of Var
     *
     * @param mixed $var1
     *
     * @return self
     */
    public function setVar1($var1)
    {
        $this->var1 = $var1;

        return $this;
    }

    /**
     * Get the value of Var
     *
     * @return mixed
     */
    public function getVar2()
    {
        return $this->var2;
    }

    /**
     * Set the value of Var
     *
     * @param mixed $var2
     *
     * @return self
     */
    public function setVar2($var2)
    {
        $this->var2 = $var2;

        return $this;
    }

}

 ?>
