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
          'email' => $email
        ]);
        return true;
      }
    }
  }

  public function login($user)
  {
    $_SESSION['user'] = [
      'email' => $user['email']
    ];
  }

  public function logout()
  {
    Session::destroy();
  }
}
