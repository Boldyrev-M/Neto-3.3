<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.01.2017
 * Time: 16:29
 */

namespace people;


use drugs\Remedy;

class Patient
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
        echo "<br>Новый пациент: ".$name;
    }
    public function takeRemedy(Remedy $rem)
    {
        $rem->eat();
    }
}