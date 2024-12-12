<?php
declare(strict_types=1);
// require_once 'Measurements.php';

include 'autoloader.php';
spl_autoload_register('autoloader');

// Создаем объект Person
$person = new Person('Алексей', 30, 'donets');

// Сериализуем объект
$serialized_person = serialize($person);

// Выводим сериализованный объект
echo "Сериализованный объект:\n" . $serialized_person . "\n\n";

// Меняем значение логина в строке
$new_login = 'donetc';
if (strlen($new_login) !== strlen($person->login)) {
    die("Длина нового логина должна совпадать с длиной старого логина!");
}
$modified_serialized_person = str_replace($person->login, $new_login, $serialized_person);

// Десериализуем измененный объект
$deserialized_person = unserialize($modified_serialized_person);

// Выводим свойства десериализованного объекта
echo "Десериализованный объект:\n";
echo $deserialized_person . "\n\n";  // Используем метод __toString()


// Создаем несколько объектов Person
$person1 = new Person('Владимир', 65, 'putin');
$person2 = new Person('Михаил', 60, 'sobyanin');
$person3 = new Person('Валентина', 55, 'matvienco');

// Создаем экземпляр списка людей
$people_list = new PeopleList();

// Добавляем людей в список
$people_list->add($person1);
$people_list->add($person2);
$people_list->add($person3);

// Проходим по списку с использованием foreach
echo 'Список людей:' . "\n";
foreach ($people_list as $key => $person) {
    echo "Сотрудник №{$key}: " . $person . "\n";  // Используем метод __toString()
}











