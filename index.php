<?php
    use Framework\Container;
    use Dotenv\Dotenv;
    use Framework\DbConnection;

    if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) 
    {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
    }

    if (file_exists(".env"))
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        echo "Окружение загружено<p>";
        var_dump($_ENV);
    }
    else 
        echo "Ошибка загрузки ENV<br>";

    Container::getApp()->run();
    