<?php
require base_path('views/partials/head.views.php');
require base_path('views/partials/header.views.php');
?>

<main>
  <h1>Hello, <?= $_SESSION['user']['first_name'] ?></h1>
  <p>List of students in the waiting list below:</p>
  <?php if ($lockers) : ?>
    <?php foreach ($lockers as $locker): ?>
      <section class="student-details-container">
        <div class="locker-list card">
          <p>
            <?= htmlspecialchars($locker['first_name']) ?>
            <?= htmlspecialchars($locker['last_name']) ?>
            from grade <?= htmlspecialchars($locker['grade']) ?> is waiting for locker <?= $locker['locker_id'] ?>.
          </p>

          <div class="locker-btn">
            <form action="/locker/decision?locker_id=<?= $locker['locker_id'] ?>" method="POST">
              <input type="hidden" name="student_number" value="<?= $locker['student_number'] ?>">
              <button type="submit" name="action" value="approve" class="success">
                Approve
              </button>
            </form>

            <form action="/locker/decision" method="POST">
              <input type="hidden" name="student_number" value="<?= $locker['student_number'] ?>">
              <button type="submit" name="action" value="decline" class="danger">
                Decline
              </button>
            </form>
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