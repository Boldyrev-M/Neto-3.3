<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.01.2017
 * Time: 16:30
 */

namespace doctors;


class Medic
{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
        echo "<br>Новый врач: ".$name;
    }

    public function surveyPatient(people\Patient $pat)
    {
        echo "На приёме ".$pat->name;

    }
    public function writeOutRemedy($remedy)
    {

    }

    public function writeOutReceipt($user, $remedies)
    {
        foreach ($remedies as $rem)
            $this->writeOutRemedy($rem);
    }
}