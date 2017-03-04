<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.01.2017
 * Time: 16:31
 */

namespace drugs;


class Remedy
{
    static private $total=0;
    private $eaten;
    private $name;
    private $treats;
    function __construct($name, $treats)
    {
        $this->name = $name;
        $this->treats = $treats;
        $this->eaten = false;
        echo "<br>Лекарство: ".$name;
        self::$total++;

    }
    public function getEaten()
    {
        return $this->eaten;
    }
    public function getName()
    {
        return $this->name;
    }
    function getTreats()
    {
        return $this->treats;
    }
    function eat()
    {
        // TODO: Implement __destruct() method.
        echo "Лекарство ".$this->name.": я съедено!";
        $this->eaten = true;
    }
}


