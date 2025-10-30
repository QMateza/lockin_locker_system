<?php
require base_path('views/header.views.php');
?>

<body>
  <header>
    <picture>
      <source media="(min-width: 768px)" srcset="img/logo-small.png" type="image/png"><img src="" alt="">
    </picture>
    <div class="nav-links">
      <nav>
        <ul>
          <li>About us</li>
          <li>Resources</li>
          <li>Contact us</li>
        </ul>
      </nav>
      <form action="/session" method="POST">
        <input type="hidden" name="_method" value="delete">
        <button>Logout</button>
      </form>
    </div>

  </header>
  <main>
    <section>
      <div class="student-details card">
        <h3>Student details</h3>
        <p>Name: Clark Kent</p>
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
            hello
          </div>
          <div>
            hello
          </div>
        </div>
      </div>
    </section>
  </main>


</body>

</html>