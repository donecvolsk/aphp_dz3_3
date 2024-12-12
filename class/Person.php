<?php
declare(strict_types=1);

class Person {
    private string $name;
    private int $age;
    private string $login;
    
    public function __construct(string $name, int $age, string $login) {
        $this->name = $name;
        $this->age = $age;
        $this->login = $login;
    }

    // Магический метод для получения свойств
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            throw new Exception("Свойство '$property' не существует.");
        }
    }

    // Магический метод для установки значений свойств
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            throw new Exception("Свойство '$property' не существует.");
        }
    }

    // Метод для преобразования объекта в строку
    public function __toString() {
        return "Имя: {$this->name}, Возраст: {$this->age}, Логин: {$this->login}";
    }

    // Метод для сериализации объекта
    public function __sleep() {
        return ['name', 'age', 'login'];
    }

    // Метод для восстановления состояния после десериализации
    public function __wakeup() {
        echo "Объект восстановлен.\n\n";
    }
}
