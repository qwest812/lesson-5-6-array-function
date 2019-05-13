<?php
$menu=[
    "url"=>'Home',
    'Site',
    'Delivery',
    'Menu'
    ];

echo "<ul>";
foreach ($menu as $url=>$value){
    echo "<li><a href=$url>$value</a></li>";
}
echo "</ul>";


print_r($menu);
echo "<br>";
var_dump($menu);