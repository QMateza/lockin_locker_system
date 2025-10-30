<?php

namespace Core;

use Core\Database;


class Authenticator
{
  public function attempt($email, $password)
  {
    $user = (new Database())->query('select * from parent where email_address = :email', [
      ':email' => $email
    ])->find();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $this->login([
          'email' => $user['email_address'],
          'first_name' => $user['first_name']
        ]);
        return true;
      }
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
