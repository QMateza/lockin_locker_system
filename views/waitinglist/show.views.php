<?php
require base_path('views/partials/head.views.php');
require base_path('views/partials/header.views.php');
?>

<main>
  <h1>Hello, <?= $_SESSION['user']['first_name'] ?></h1>
  <p>List of students below:</p>
  <?php if ($lockers) : ?>
    <?php foreach ($lockers as $locker): ?>
      <section class="student-details-container">
        <div class="locker-list card">
          <p><?= $locker['first_name'] ?> <?= $locker['last_name'] ?> from grade <?= $locker['grade'] ?> is waiting for a locker.</p>
          <a>Approve</a> <a>Cancel</a>
          <div>
          </div>
        </div>
      </section>
      <div class="divider"></div>
    <?php endforeach ?>
  <?php else : ?>
    <p>There's nobody in the waiting list.</p>
  <?php endif ?>
</main>

</body>

</html>