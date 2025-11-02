<?php

namespace Core;

use Core\Database;


class Authenticator
{
  public function attempt($email, $password)
  {
    $db = new Database();
    $user = $db->query('select * from parent where email_address = :email', [
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
      'email' => $user['email_address'],
      'first_name' => $user['first_name'],
      'parent_id' => $user['parent_id']
    ];
  }

  public function logout()
  {
    Session::destroy();
  }
}
