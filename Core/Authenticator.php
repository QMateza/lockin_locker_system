<?php

namespace Core;

use Core\Database;


class Authenticator
{
  public function attempt($email, $password, $table)
  {
    $db = new Database();
    $user = $db->query("select * from {$table} where email = :email", [
      ':email' => $email
    ])->find();
    if ($user && password_verify($password, $user['password'])) {
      $this->login($user);
      return true;
    }
  }

  public function login($user)
  {
    $_SESSION['user'] = [
      'email' => $user['email'],
      'first_name' => $user['first_name']
    ];
  }

  public function logout()
  {
    Session::destroy();
  }
}
