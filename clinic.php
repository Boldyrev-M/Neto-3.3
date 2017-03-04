<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.01.2017
 * Time: 17:10
 */
error_reporting(E_ALL);

spl_autoload_register(function ($class) {
    $classexp = explode('\\',$class);
    $class = implode('/',$classexp);
    // иначе сервер netoloгии дает ошибку
    // failed to open stream: No such file or directory
    include __DIR__ . '/' . $class . '.php';
});

$therapist = new \doctors\Medic("Пилюлькин");
$surgeon = new \doctors\Medic("Борменталь");

$ivanov = new \people\Patient('Иванов');
$petrov = new \people\Patient('Петров');
$sidorov = new \people\Patient("Сидоров");

$ivanov->sick("простуда");
$ivanov->sick("зубы");
$petrov->sick("уши");
$petrov->sick("головная боль");
$sidorov->sick("уши");
// набираем лекарства в аптеку
$apteka = array();
$apteka[] = new \drugs\Remedy('аспирин','простуда');
$apteka[] = new \drugs\Remedy('анальгин','головная боль');
$apteka[] = new \drugs\Remedy('анальгин','головная боль');
$apteka[] = new \drugs\Remedy('мышьяк','зубы');

$therapist->surveyPatient($ivanov, $apteka);
$surgeon->surveyPatient($petrov, $apteka);
$surgeon->surveyPatient($sidorov, $apteka);
