<?php

use Core\Database;

$db = new Database();

$lockers = $db->query('SELECT 
  student.student_number,
  student.first_name,
  student.last_name,
  student.grade,
  waitinglist.waiting_list_id,
  waitinglist.waiting_for_payment,
  waitinglist.waiting_for_locker,
  waitinglist.locker_id
FROM student
INNER JOIN waitinglist
  ON student.student_number = waitinglist.student_number;')->get();


view('waitinglist/show.views.php', [
  'lockers' => $lockers
]);
