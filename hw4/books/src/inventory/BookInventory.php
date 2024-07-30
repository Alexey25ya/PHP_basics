<?php

namespace Hw\inventory;

use Hw\books\Book;


class BookInventory {
    protected array $books;

    // Конструктор класса
    public function __construct() {
        $this->books = [];
    }

    // Метод для добавления книги в инвентарь
    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    // Метод для получения информации о способе получения всех книг в инвентаре
    public function getAllDeliveryMethods(): array
    {
        $deliveryMethods = [];

        foreach ($this->books as $book) {
            $deliveryMethods[] = $book->getDeliveryMethod() ;
        }

        return $deliveryMethods;
    }

    // Метод для получения общей статистики по прочтениям всех книг в инвентаре
    public function getTotalReadCount(): int
    {
        $totalReadCount = 0;

        foreach ($this->books as $book) {
            $totalReadCount += $book->getReadCount();
        }

        return $totalReadCount;
    }
}


