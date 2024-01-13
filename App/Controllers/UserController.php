<?php

namespace App\Controllers;

use Framework\Controller;

class UserController extends Controller
{
    public function index($name)
    {
       return $this->view('index.php', ['name' =>  $name]);
    }

    public function create($name)
    {
       return $this->view('create.php', ['name' =>  $name]);
    }

    public function update($name)
    {
       return $this->view('update.php', ['name' =>  $name]);
    }
}
