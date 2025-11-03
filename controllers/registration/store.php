<?php



use Core\Email;
use Core\Database;
use Core\Validator;

$title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$id_number = $_POST['id_number'];
$street = $_POST['street'];
$errors = [];

if (!Validator::string($title, 2)) {
  $errors['title'] = 'Please enter your title.';
}

if (!Validator::string($name, 3, 255)) {
  $errors['name'] = 'Your name must be atleast 3 characters long.';
}

if (!Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email.';
}

if (!Validator::string($password, 7, 255)) {
  $errors['password'] = 'Your password must be atleast 7 characters long.';
}

if (!Validator::string($phone, 10, 10)) {
  $errors['phone'] = 'Please enter the correct phone number.';
}

if (!Validator::string($id_number, 13, 13)) {
  $errors['id_number'] = 'Please enter the correct ID number.';
}

if (!Validator::string($street, 5, 255)) {
  $errors['street'] = 'Please enter the correct street address.';
}

if (!empty($errors)) {
  return view('registration/create.view.php', [
    'errors' => $errors
  ]);
}

$name_parts = explode(' ', trim($name));
$first_name = $name_parts[0];
$last_name = end($name_parts);

$db = new Database();

$user = $db->query('select * from parent where email = :email', [
  ':email' => $email
])->find();

if ($user) {
  header('location: /');
  die();
} else {
  $db->query('insert into parent(title, id_number, first_name, last_name, email, home_address, phone_number, password) values (:title, :id_number, :first_name, :last_name, :email, :home_address, :phone_number, :password)', [
    ':title' => $title,
    ':id_number' => $id_number,
    ':first_name' => $first_name,
    ':last_name' => $last_name,
    ':email' => $email,
    ':home_address' => $street,
    ':phone_number' => $phone,
    'password' => password_hash($password, PASSWORD_BCRYPT)
  ]);

  (new Email())->sendRegistrationEmail($email, $first_name);

  header('location: /');
  die();
}
