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
    private $ill;
    public function sick($illness)
    {
        $this->ill[] = $illness;
        //echo "<br>sick это <pre>".print_r($this->ill,true)."</pre>";
    }
    public function getIllness()
    {
//        echo "<br>getIllness <pre>".print_r($this->ill ,true)."</pre>";
        return $this->ill;
    }
    public function __construct($name)
    {
        $this->name = $name;
        $this->ill = array();
        echo "<br>Новый пациент: ".$name;
    }
    public function takeRemedy(Remedy $rem)
    {
        $rem->eat();
    }
}