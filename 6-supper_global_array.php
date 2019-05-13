<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.03.2019
 * Time: 14:09
 */

//$GLOBALS срдержит ссылки на все глобальные переменные

function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();

echo "<br>";


//$_ENV -- $HTTP_ENV_VARS [устарело] — Переменные окружения

var_dump($_ENV["text_account"]);
//$_SESSION -- $HTTP_SESSION_VARS [устарело] — Переменные сессии
session_start();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "<br>";

//$_COOKIE -- $HTTP_COOKIE_VARS [устарело] — HTTP Cookies

$value = 'что-то откуда-то';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* срок действия 1 час */
setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);
// Вывести одно конкретное значение cookie
echo $_COOKIE["TestCookie"];

// В целях тестирования и отладки может пригодиться вывод всех cookie
print_r($_COOKIE);

// установка даты истечения срока действия на час назад, удаление
setcookie("TestCookie", "", time() - 3600);
setcookie("TestCookie", "", time() - 3600, "/~rasmus/", "example.com", 1);


//$_SERVER -- $HTTP_SERVER_VARS [удалено] — Информация о сервере и среде исполнения


$indicesServer = array('PHP_SELF',
    'argv',
    'argc',
    'GATEWAY_INTERFACE',
    'SERVER_ADDR',
    'SERVER_NAME',
    'SERVER_SOFTWARE',
    'SERVER_PROTOCOL',
    'REQUEST_METHOD',
    'REQUEST_TIME',
    'REQUEST_TIME_FLOAT',
    'QUERY_STRING',
    'DOCUMENT_ROOT',
    'HTTP_ACCEPT',
    'HTTP_ACCEPT_CHARSET',
    'HTTP_ACCEPT_ENCODING',
    'HTTP_ACCEPT_LANGUAGE',
    'HTTP_CONNECTION',
    'HTTP_HOST',
    'HTTP_REFERER',
    'HTTP_USER_AGENT',
    'HTTPS',
    'REMOTE_ADDR',
    'REMOTE_HOST',
    'REMOTE_PORT',
    'REMOTE_USER',
    'REDIRECT_REMOTE_USER',
    'SCRIPT_FILENAME',
    'SERVER_ADMIN',
    'SERVER_PORT',
    'SERVER_SIGNATURE',
    'PATH_TRANSLATED',
    'SCRIPT_NAME',
    'REQUEST_URI',
    'PHP_AUTH_DIGEST',
    'PHP_AUTH_USER',
    'PHP_AUTH_PW',
    'AUTH_TYPE',
    'PATH_INFO',
    'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
echo "<br>";


//$_FILES -- $HTTP_POST_FILES [устаревшее] — Переменные файлов, загруженных по HTTP


//$_GET -- $HTTP_GET_VARS [deprecated] — HTTP GET variables

//echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

//$_POST -- $HTTP_POST_VARS [deprecated] — HTTP POST variables

//echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

//$_REQUEST;