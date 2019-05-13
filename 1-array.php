<?php



$first =array(
    array(
        "key"  => "value",
        "key2" => "value2",
        "key3" => "value3",
    )
);


//php 5.4

$second=[
    "key"  => "value",
    "key2" => "value2",
    "key3" => "value3",
];


// ключ может быть  или  integer  или string, значение может быть любым


// если одинаковые ключи присваиваеися последний
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);



// ключи могут быть одновременно как string и integer


$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);



//ключи задавать не обязательно
$array = array("foo", "bar", "hallo", "world");
var_dump($array);




//можно пропускать ключи

$array = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array);

echo "<br>";



//доступ по ключу и многомерный массив,  доступ по ключу [key]  or {key}

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array["foo"]);
echo "<br>";
var_dump($array{42});
echo "<br>";
var_dump($array["multi"]["dimensional"]["array"]);


echo "<br>";

//разименование массива
function getArray() {
    return array(1, 2, 3);
}

// в PHP 5.4
$secondElement = getArray()[1];

// ранее делали так
$tmp = getArray();
$secondElement = $tmp[1];


//now
echo "<br>";
echo "<br>";
$ar=[1,2,3,4,5][rand(0,4)];
var_dump($ar);



//добавление елементов в масси

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // В этом месте скрипта это
// то же самое, что и $arr[13] = 56;

$arr["x"] = 42; // Это добавляет к массиву новый
// элемент с ключом "x"

unset($arr[5]); // Это удаляет элемент из массива

unset($arr);    // Это удаляет массив полностью




// Создаем простой массив.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
$array[] = 6;
print_r($array);

// Переиндексация:
$array = array_values($array);
$array[] = 7;
print_r($array);