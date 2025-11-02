<?php

use Core\Database;
use Core\Validator;

$student_number = $_POST['student_number'];
$name = $_POST['name'];
$grade = $_POST['grade'];
$locker_id = $_POST['locker_id'];

if (!Validator::string($student_number, 5, 5)) {
  $errors['student_number'] = 'Please enter the correct students\' student number.';
}

if (!Validator::string($name, 3)) {
  $errors['name'] = 'Please enter your correct name.';
}

if (!Validator::string($grade, 2, 2)) {
  $errors['grade'] = 'Please enter the correct grade.';
}

$name_parts = explode(' ', trim($name));
$first_name = $name_parts[0];
$last_name = end($name_parts);

$db = new Database();

$student = $db->query('select * from student where student_number = :student_number', [
  ':student_number' => $student_number
])->find();

if ($student) {
  header('location: /');
  die();
} else {
  $db->query('insert into student(student_number, parent_id, first_name, last_name, grade) values (:student_number, :parent_id, :first_name, :last_name, :grade)', [
    ':student_number' => $student_number,
    ':parent_id' => $_SESSION['user']['parent_id'],
    ':first_name' => $first_name,
    ':last_name' => $last_name,
    ':grade' => $grade,
  ]);

  $db->query('insert into waitinglist(student_number, waiting_for_payment, waiting_for_locker, locker_id) values(:student_number, :payment, :locker, :locker_id)', [
    ':student_number' => $student_number,
    ':payment' => 1,
    ':locker' => 0,
    ':locker_id' => $locker_id
  ]);

  header('location: /');
  die();
}
