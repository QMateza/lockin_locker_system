<?php


use Core\LoginForm;
use Core\Authenticator;
use Core\Session;

$form = LoginForm::validate($attributes = [
  'email' => $_POST['email'],
  'password' => $_POST['password']
]);

if ((new Authenticator)->attempt($attributes['email'], $attributes['password'], 'administrator')) {
  redirect('/locker');
}

$form->error('email', 'No matching account found for that email address and password.');
$errors = '';

Session::flash($errors, $form->errors());
Session::flash('old', [
  'email' => $_POST['email']
]);

return redirect('/');
