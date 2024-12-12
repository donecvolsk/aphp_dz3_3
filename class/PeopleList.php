<?php
declare(strict_types=1);

class PeopleList implements Iterator {
    private $people = [];
    private $position = 0;

    public function add(Person $person) {
        $this->people[] = $person;
    }

    // Реализация методов интерфейса Iterator
    public function current(): mixed {
        return $this->people[$this->position];
    }

    public function key(): mixed {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->people[$this->position]);
    }
}