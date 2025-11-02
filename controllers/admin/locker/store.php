<?php

use Core\Database;

$db = new Database();

if ($_POST['action'] === 'approve') {
  $db->query('insert into bookedlocker(student_number, locker_id) values(:student_number, :locker_id)', [
    ':student_number' => $_POST['student_number'],
    ':locker_id' => $_GET['locker_id']
  ]);
}


$db->query('delete from waitinglist where student_number = :student_number', [
  ':student_number' => $_POST['student_number']
]);

header('/');
die();
