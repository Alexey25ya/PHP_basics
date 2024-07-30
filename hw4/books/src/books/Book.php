<?php

namespace Hw\books;

abstract class Book {
    protected string $title;
    protected string $author;
    protected int $readCount;

    // Конструктор класса
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->readCount = 0; // Изначально количество прочтений равно нулю
    }

    // Абстрактный метод для получения информации о способе получения книги (реализуется в подклассах)
    abstract public function getDeliveryMethod();

    // Метод для увеличения счетчика прочтений
    public function incrementReadCount(): void
    {
        $this->readCount++;
    }

    // Метод для получения статистики по количеству прочтений
    public function getReadCount(): int
    {
        return $this->readCount;
    }
}