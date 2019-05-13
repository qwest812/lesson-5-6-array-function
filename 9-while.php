<?php


/* пример 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* выводиться будет значение переменной
                   $i перед её увеличением
                   (post-increment) */
}

/* пример 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;


//бесконечный цикл

while (true){
    echo "ff";
}


//do while
$d = 1;
do
{
    $d = $d + 2;
    echo "Дом  №" . $d . "<br />";
}
while ($d <= 7);


