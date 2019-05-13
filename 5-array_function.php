<?php

//array_shift
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);



//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);


//array_key_exists
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}


//in_array
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {
    echo "Нашел mac";
}


//array_unique
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);


//compact
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);
?>

