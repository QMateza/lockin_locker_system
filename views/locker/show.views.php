<?php
require base_path('views/head.views.php');
require base_path('views/header.views.php');
?>


<main>
  <h1>Hello, <?= $_SESSION['user']['first_name'] ?></h1>
  <p>List of students below:</p>
  <?php if ($students) : ?>
    <?php foreach ($students as $student): ?>
      <section class="student-details-container">
        <div class="student-details card">
          <div>
            <h3>Student details</h3>
            <p>Name: <?= $student['first_name'] . " " . $student['last_name'] ?></p>
            <p>Grade: <?= $student['grade'] ?></p>
          </div>
          <div>
            <h3>Locker details</h3>
            <p>Locker id: locker id</p>
            <p>Date: Date</p>
          </div>


        </div>
      </section>
      <div class="divider"></div>
    <?php endforeach ?>
  <?php else : ?>
    <p>You have not booked a locker yet.</p>
  <?php endif ?>

  <section>
    <div class="lockers-container">
      <h3>Available lockers</h3>
      <p>Select the locker you would like to apply for below.</p>
      <?php if ($lockers) : ?>
        <?php foreach ($lockers as $locker) : ?>
          <div class="available-lockers">
            <div>
              <p>Locker no: <?= $locker['locker_id'] ?></p>
              <a href="/locker/create?locker_id=<?= urlencode($locker['locker_id']) ?> ">Apply for locker</a>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </section>
</main>

</body>

</html>