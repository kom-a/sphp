<?php
    if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
        require_once dirname(__FILE__) . '/vendor/autoload.php';
    }

    echo "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    
    phpinfo();
    