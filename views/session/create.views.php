<?php
require base_path('views/header.views.php');
?>

<body>

  <div class="wrapper">

    <aside class="one-half">
      <div class="login">
        <picture>
          <source
            media="(min-width: 768px)"
            srcset="img/login.png"
            type="image/png">
          <img src="" alt="">
        </picture>
      </div>

      <picture>
        <source media="(min-width: 768px)" srcset="img/logo-white.png" type="image/png">
        <img src="" alt="">
      </picture>
      <h1>Welcome</h1>
      <h2>Simplify locker management with secure, hassle-free
        bookings for every student.</h2>
    </aside>

    <div class="container one-half">

      <div class="inner_container">
        <h1>Login</h1>
        <p>Your space, your locker — signup to get yours.</p>
        <form action="/session" method="POST" class="form_container">
          <fieldset>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="eg: name@email.com" class="input">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" class="input">
          </fieldset>

          <button type="submit" class="submit_button">Login</button>
        </form>
        <p>Don't have an account yet? <a href="/register">Signup</a></p>
      </div>
      <footer>
        <p>Student Locker Booking System. Copyright &#169; <?= date('Y') ?></p>
      </footer>
    </div>

  </div>

</body>

</html>