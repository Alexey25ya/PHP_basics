<?php

namespace Hw\books;

class DigitalBook extends Book {
    protected string $downloadLink;

    // Конструктор подкласса
    public function __construct($title, $author, $downloadLink) {
        parent::__construct($title, $author);
        $this->downloadLink = $downloadLink;
    }

    // Реализация метода получения информации о способе получения книги
    public function getDeliveryMethod(): string
    {
        return $this->downloadLink;
    }
}