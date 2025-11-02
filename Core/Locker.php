<?php

namespace Core;

use Core\Database;

class Locker
{

  public function allLockers()
  {
    $db = new Database();
    $lockers = $db->query('select * from locker where booked_locker_id = null')->get();
    dd($lockers);
  }
}
