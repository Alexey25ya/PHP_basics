
Собрать для себя окружение из Nginx + PHP-FPM и PHP CLI
Выполните код в контейнере PHP CLI и объясните, что выведет данный код и почему:

<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
?>

# Результат выполнения кода:
в версии PHP 8.2
bool(true) int(12345) bool(false) bool(false)

в версии PHP 7.4
bool(true) int(12345) bool(false) bool(true)


var_dump($a == $b) - не строгое сравнение, поэтому результат bool(true)
var_dump((int)'012345') - привидение к типу int, 0 "отбрасывается"
var_dump((float)123.0 === (int)123.0) - из-за привидения типов и строгого сравнения результат bool(false), т.к. разные типы данных
var_dump(0 == 'hello, world') - в версии 8.2 bool(false), в версии7.4 bool(true)


## В контейнере с PHP CLI поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод?
в версии PHP 8.2
bool(true) int(12345) bool(false) bool(false)

в версии PHP 7.4
bool(true) int(12345) bool(false) bool(true)

## Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные, функции и конструкции типа list() использовать нельзя.

$x=1;
$y=2;
$x=$x+$y;
$y=$x-$y;
$x=$x-$y;
echo "x={$x}, y={$y}";