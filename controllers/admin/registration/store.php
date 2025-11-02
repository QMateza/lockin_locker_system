<?php

use Core\Database;
use Core\Validator;
use Core\Authenticator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (!Validator::string($name, 3, 255)) {
  $errors['name'] = 'Your name must be atleast 3 characters long.';
}

if (!Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email.';
}

if (!Validator::string($password, 7, 255)) {
  $errors['password'] = 'Your password must be atleast 7 characters long.';
}

if (!empty($errors)) {
  return view('admin/registration/create.views.php', [
    'errors' => $errors
  ]);
}

$name_parts = explode(' ', trim($name));
$first_name = $name_parts[0];
$last_name = end($name_parts);

$db = new Database();

$user = $db->query('select * from administrator where email = :email', [
  ':email' => $email
])->find();

if ($user) {
  header('location: /');
  die();
} else {
  $db->query('insert into administrator(first_name, last_name, email, password) values (:first_name, :last_name, :email, :password)', [
    ':first_name' => $first_name,
    ':last_name' => $last_name,
    ':email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
  ]);

  // $auth = new Authenticator();
  // $auth->login($user);

  header('location: /');
  die();
}
