<?php
declare(strict_types=1);

//проверка и печать данных регистрации пользователяя полученных из вне
class Person
{
    public string $name;
    public string $surname;
    public int $age;
    public array $arrayPerson = []; //массив имя фамилия
    public $arrayPerson_string;

    //добавление имени фамилии в массив
    public function addPerdson(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->arrayPerson[] = $this->name;
        $this->arrayPerson[] = $this->surname;
    }

    //добавление возраста в массив
    public function __set($name, int $value)
    {
        $this->age = $value;
        $this->arrayPerson[] = $this->age;
    }

    //вывод массива в консоль
    public function __get($name)
    {
        var_dump($this->arrayPerson);
        echo PHP_EOL;
    }

    public function __sleep()
    {
        return array('name', 'age');   
    }

    //сериализация массива в строку
    public function serializedStr()
    {
        $this->arrayPerson_string = serialize($this->arrayPerson);
        echo $this->arrayPerson_string . ' - строка сериализованного массива' . PHP_EOL;
    }

    //замена возраста в строке
    public function ageСhange($newAge)
    {
        $this->arrayPerson_string = str_replace("48", $newAge, $this->arrayPerson_string);
        echo $this->arrayPerson_string . ' - строка сериализованного массив после изменения возраста' . PHP_EOL;
        echo PHP_EOL;
    }

     //сериализация массива в строку
     public function unserializedStr()
     {
        $this->arrayPerson = unserialize($this->arrayPerson_string);
        echo 'массив после десириализации:' .  PHP_EOL;
        var_dump($this->arrayPerson);
     }

}
