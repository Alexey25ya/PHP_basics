<?php

use Hw\books\DigitalBook;
use Hw\books\PhysicalBook;
use Hw\inventory\BookInventory;

require_once __DIR__ . '/vendor/autoload.php';


// Пример использования
$digitalBook = new DigitalBook("Digital Book Title", "Digital Book Author", "https://example.com/download-link");
$physicalBook = new PhysicalBook("Physical Book Title", "Physical Book Author", "Library XYZ");
$physicalBook2=new PhysicalBook("Война и мир", "Л.Н. Толстой", "Библиотека имени В.И. Ленина");

// Создаем инвентарь и добавляем книги
$inventory = new BookInventory();
$inventory->addBook($digitalBook);
$inventory->addBook($physicalBook);
$inventory->addBook($physicalBook2);

// Увеличиваем счетчик прочтений для каждой книги
$digitalBook->incrementReadCount();
$physicalBook->incrementReadCount();
$physicalBook2->incrementReadCount();
$physicalBook2->incrementReadCount();

// Получаем информацию о способе получения всех книг
$deliveryMethods = $inventory->getAllDeliveryMethods();
print_r($deliveryMethods);

// Получаем общую статистику по прочтениям
$totalReadCount = $inventory->getTotalReadCount();
echo "Total Read Count: $totalReadCount";