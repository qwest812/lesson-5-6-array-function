<?php

for ($i = 1; $i <= 10; $i++) {
echo $i;
}

/* пример 2 */

for ($i = 1; ; $i++) {
if ($i > 10) {
break;
}
echo $i;
}

/* пример 3 */

$i = 1;
for (; ; ) {
if ($i > 10) {
break;
}
echo $i;
$i++;
}

/* пример 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

//альтернативный синтаксис
 for ($item = 1; $item <= 10; $item ++):
    echo "<li>$item</li>";
 endfor;