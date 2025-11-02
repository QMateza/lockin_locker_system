<?php

use Core\Database;

$db = new Database();

$student = $db->query('select * from student where parent_id = :parent_id', [
  ':parent_id' => $_SESSION['user']['parent_id']
])->get();

$locker = $db->query('select * from locker')->get();

view('locker/show.views.php', [
  'students' => $student,
  'lockers' => $locker
]);
