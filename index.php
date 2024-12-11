<?php
declare(strict_types=1);
// require_once 'Measurements.php';

include 'autoloader.php';
spl_autoload_register('autoloader');

$person = new Person();

$person->addPerdson('Alex', 'Donets');
$person->addAge = 48; //добавление возраста через __set
$person->printPerson; //печать в консоль массива через __get

//echo $serializedStr = serialize($person); //сериализация объекта $person

$person->serializedStr();//сериализация массива персонажа
$person->ageСhange('50');// замена возраста в строке сериализации
$person->unserializedStr();//десериализация строки сериализации в массив











