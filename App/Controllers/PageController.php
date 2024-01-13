<?php

namespace App\Controllers;

use Framework\Controller;

class PageController extends Controller
{
    public function index($name, $value)
    {
       return $this->view('index.php', ['name' =>  $name, 'value' => $value]);
    }
}
