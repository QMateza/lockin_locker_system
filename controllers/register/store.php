<?php

use Core\Database;
use Core\Validator;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (!Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email.';
}

if (! Validator::string($password, 7, 255)) {
  $errors['password'] = 'Your password must be atleast 7 characters long.';
}

if (! empty($errors)) {
  return view('registration/create.view.php', [
    'errors' => $errors
  ]);
}

$db = new Database();

$user = $db->query('select * from users where email = :email', [
  ':email' => $email
])->find();

if ($user) {
  header('location: /');
  die();
} else {
  $db->query('insert into users(email, password) values (:email, :password)', [
    ':email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
  ]);

  $auth = new Authenticator();
  $auth->login($user);

  header('location: /');
  die();
}
