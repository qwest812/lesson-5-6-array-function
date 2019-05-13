<?php


$menu=[
    "url"=>'Home',
    'Site',
    'Delivery',
    'Menu'
];

var_dump(count($menu));

echo "<br>";

//сериализация
var_dump(serialize($menu));

echo "<br>";



//array_shift — Извлекает первый элемент массива


$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

echo "<br>";


//array_unshift — Добавляет один или несколько элементов в начало массива


$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);

echo "<br>";


//array_push — Добавляет один или несколько элементов в конец массива
$stack = array("orange", "banana");

print_r($stack);
//если добавляете 1елемент лучше использовать $array[]=...

echo "<br>";
//array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
//ищет только на 1м уровне
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}

echo "<br>";

//in_array — Проверяет, присутствует ли в массиве значение

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {
    echo "Нашел mac";
}

echo "<br>";

$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
    echo "'12.4' найдено со строгой проверкой\n";
}

if (in_array(1.13, $a, true)) {
    echo "1.13 найдено со строгой проверкой\n";
}

echo "<br>";

$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' найдено\n";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' найдено\n";
}

if (in_array('o', $a)) {
    echo "'o' найдено\n";
}

echo "<br>";

//array_unique — Убирает повторяющиеся значения из массива
//SORT_REGULAR - нормальное сравнение элементов (типы не меняются)
//SORT_NUMERIC - элементы сравниваются как числа
//SORT_STRING - элементы сравниваются как строки
//SORT_LOCALE_STRING - сравнивает элементы как строки, с учетом текущей локали.

//  <5.2.9  Sort string
//  5.2.9  sort regular
//  5.2.10  sort string
//  7.2.0  sort string  создаеться новій массив, а не копируется


$input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
var_dump($result);


echo "<br>";

//compact — Создает массив, содержащий названия переменных и их значения
// функция обтратна extract


$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);


