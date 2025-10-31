<?php
require base_path('views/head.views.php');
require base_path('views/header.views.php');
?>


<main>
  <h1>Hello, <?= $_SESSION['user']['first_name'] ?></h1>
  <section>
    <div class="student-details card">
      <h3>Student details</h3>
      <p>Name: <?= $_SESSION['student']['first_name'] ?></p>
      <p>Grade: 10</p>
    </div>
    <div class="locker-details card">
      <h3>Locker details</h3>
      <p>Locker id: locker id</p>
      <p>Date: Date</p>
    </div>
  </section>
  <section>
    <div class="lockers-container">
      <h3>Available lockers</h3>
      <p>Something else comes here.</p>
      <div class="available-lockers">
        <div>
          <p>F23</p>
          <a href="/locker/create">Apply for locker</a>
        </div>
      </div>
    </div>
  </section>
</main>

</body>

</html>