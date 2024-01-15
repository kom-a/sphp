<?php
use Framework\Container;
use Dotenv\Dotenv;
use Framework\DbConnection;

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

try {
    if (file_exists(".env")) {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        echo "Окружение загружено<p>";
        var_dump($_ENV);
    } else
        echo "Ошибка загрузки ENV<br>";

    session_start(["use_strict_mode" => true]);
} catch (Exception $e) {
    $_SESSION['msg'] = $e->getMessage();
    header('Location: /home');
    exit();
}

echo "<br>";
echo "login = " . $_SESSION["login"];
echo "<br>";

echo "<br>";
echo "msg = " . $_SESSION["msg"];
echo "<br>";

if (!isset($_SESSION["login"])) {
    echo '<form method="post" action="/login">';
    echo '<input type="text" placeholder="Логин" name="login" aria-label="Логин"/>';
    echo '<input type="text" placeholder="Пароль" name="password" aria-label="Пароль"/>';
    echo '<button type="submit">Войти</button>';

    echo '</form>';
} else {
    echo 'Привет, ' . $_SESSION["login"];
    echo '<br><a href="/logout">Выйти</a>';

}

Container::getApp()->run();
