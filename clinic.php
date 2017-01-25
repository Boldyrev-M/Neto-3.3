<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.01.2017
 * Time: 17:10
 */
include "classes/Medic.php";
include "classes/Patient.php";
include "classes/Remedy.php";

//spl_autoload_register()
$therapist = new \doctors\Medic("Пилюлькин");
$surgeon = new \doctors\Medic("Борменталь");

$ivanov = new \people\Patient('Иванов');
$petrov = new \people\Patient('Петров');

$aspirine = new \drugs\Remedy('Аспирин','Простуда');
$analgine = new \drugs\Remedy('Анальгин','Головная боль');

$therapist->surveyPatient($ivanov);