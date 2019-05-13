<?php


//ksort — Сортирует массив по ключам


$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>";



//rsort — Сортирует массив в обратном порядке


$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo "<br>";




//arsort — Сортирует массив в обратном порядке, сохраняя ключи


$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


//сравнение сортировок
//http://php.net/manual/ru/array.sorting.php

