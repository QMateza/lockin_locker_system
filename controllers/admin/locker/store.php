<?php

use Core\Database;

$db = new Database();

if ($_POST['action'] === 'approve') {
  $db->query('insert into bookedlocker(student_number, locker_id) values(:student_number, :locker_id)', [
    ':student_number' => $_POST['student_number'],
    ':locker_id' => $_GET['locker_id']
  ]);
  $booked_locker_id = $db->query('select booked_locker_id from bookedlocker where locker_id = :locker_id', [
    ':locker_id' => $_GET['locker_id']
  ])->find();

  $db->query('update locker set booked_locker_id = :booked_locker_id, locker_status = :locker_status WHERE locker_id = :locker_id', [
    ':booked_locker_id' => $booked_locker_id['booked_locker_id'],
    ':locker_status' => 1,
    ':locker_id' => $_GET['locker_id']
  ]);
}


$db->query('delete from waitinglist where student_number = :student_number', [
  ':student_number' => $_POST['student_number']
]);

header('/');
die();
