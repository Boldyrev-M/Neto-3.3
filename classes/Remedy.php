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
    private $eaten;
    private $name;
    private $treats;
    function __construct($name, $treats)
    {
        $this->name = $name;
        $this->treats = $treats;
        $this->eaten = false;
        echo "<br>Лекарство: ".$name;

    }

    function eat()
    {
        // TODO: Implement __destruct() method.
        echo $name.": я съедено!";
        $this->eaten = true;
    }
}


