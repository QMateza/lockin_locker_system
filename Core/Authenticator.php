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

    $student = $db->query('select * from student where parent_id = :parentId', [
      ':parentId' => 3
    ])->find();

    // dd($student);
    if ($user && password_verify($password, $user['password'])) {
      $this->login($user, $student);
      return true;
    }
  }

  public function login($user, $student)
  {
    $_SESSION['user'] = [
      'email' => $user['email_address'],
      'first_name' => $user['first_name']
    ];
    $_SESSION['student'] = [
      'first_name' => $student['first_name'],
      'last_name' => $student['last_name'],
      'grade' => $student['grade']
    ];
  }

  public function logout()
  {
    Session::destroy();
  }
}
