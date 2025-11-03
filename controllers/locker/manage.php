<?php

use Core\Database;

$db = new Database();

$students = $db->query('
  SELECT 
    s.first_name AS student_first_name,
    s.last_name AS student_last_name,
    s.grade as student_grade,
    l.locker_id,
    b.date
  FROM student s
  INNER JOIN bookedlocker b ON s.student_number = b.student_number
  INNER JOIN locker l ON b.locker_id = l.locker_id
  WHERE s.parent_id = :parent_id
', [
  'parent_id' => $_SESSION['user']['parent_id'] ?? 0
])->get();



$locker = $db->query('select * from locker where locker_status = :locker_status', [
  ':locker_status' => 0
])->get();

view('locker/show.views.php', [
  'students' => $students,
  'lockers' => $locker ?? null
]);
