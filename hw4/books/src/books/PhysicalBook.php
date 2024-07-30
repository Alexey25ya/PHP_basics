<?php

namespace Hw\books;


class PhysicalBook extends Book {
    protected string $libraryAddress;

    // Конструктор подкласса
    public function __construct($title, $author, $libraryAddress) {
        parent::__construct($title, $author);
        $this->libraryAddress = $libraryAddress;
    }

    // Реализация метода получения информации о способе получения книги
    public function getDeliveryMethod(): string
    {
        return $this->libraryAddress;
    }
}