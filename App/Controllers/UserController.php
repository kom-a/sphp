<?php

namespace App\Controllers;

use Framework\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
   public function index($name)
   {
      return $this->view('index.php', ['name' => $name]);
   }

   public function create($name)
   {
      return $this->view('create.php', ['name' => $name]);
   }

   public function update($name)
   {
      return $this->view('update.php', ['name' => $name]);
   }

   public function users()
   {
      $users = new UserModel();
      return $this->view('users.php', ["users" => $users->all()]);
   }

   public function user($id)
   {
      $userModel = new UserModel();
      $users = $userModel->getById($id);

      if (count($users) == 0)
         return $this->view("error.php", []);

      $user = $users[0];

      return $this->view('user.php', ["user" => $user]);
   }
}
