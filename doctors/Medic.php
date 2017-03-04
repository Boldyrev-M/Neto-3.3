<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.01.2017
 * Time: 16:30
 */

namespace doctors;


use drugs\Remedy;
use people\Patient;

class Medic
{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
        echo "<br>Новый врач: ".$name;
    }

    public function surveyPatient($pat, $apteka)
    {
        echo "<br><br><u>Доктор ".$this->name."</u>";
        echo "<br><b>На приёме: больной ".$pat->name."...</b><br>";
        $sicken = (array) $pat->getIllness(); // список болезней пациента
        $drugs = array(); // список лекарств для него
        echo "Подбираем лекарства...";
        foreach ($apteka as $drug) {

            if (!($drug->getEaten())) {

                foreach ($sicken as $key => $illness) {
                    if ($illness == $drug->getTreats()) {
                        echo "<br>" .$illness . " - ЛЕЧИМ с помощью: " . $drug->getName();
                        $drugs[] = $drug;
                        unset ($sicken[$key]);// чтоб два раза не лечить
                    } else {
                        // echo "<br>" . $illness . " с помощью " . $drug->getName() . " не лечится...";
                    }
                }
            }
        } // перебираем всю аптеку

        if ( count($drugs) ) {
        $this->writeOutReceipt($pat, $drugs);
                } // "не пустой массив получился"
        else {
            echo "<br>Тяжёлый случай... Следующий!";
        }
    }

    public function writeOutRemedy(Patient $user, Remedy $remedy)
    {
        echo "<br>Больной ".$user->name.", принять ". $remedy->getName()."!<br>";
        $user->takeRemedy($remedy);
    }

    public function writeOutReceipt(Patient $user, $remedies)
    {
        echo "<br>Рецепт: выписано лекарств: ".count($remedies);
        foreach ($remedies as $rem) {
            $this->writeOutRemedy($user, $rem);
        }
    }
}