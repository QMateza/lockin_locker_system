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
        <h1>Signup</h1>
        <h5>Your space, your locker — log in to manage it.</h5>
        <form action="" class="form_container">
          <select name="title" id="" class="input">
            <option value="">Mr</option>
            <option value="">Ms</option>
            <option value="">Mrs</option>
          </select>
          <input type="text" name="name" placeholder="eg: John Doe" class="input">
          <input type="email" name="email" placeholder="eg: name@email.com" class="input">
          <input type="password" name="password" placeholder="Password" class="input">
          <input type="submit" value="Sign Up" class="submit_button" class="input">
        </form>
        <p>Already have an account? <a href="">Login</a></p>
      </div>
      <footer>
        <p>Student Locker Booking System. Copyright &#169; <?= date('Y') ?></p>
      </footer>
    </div>

  </div>

</body>

</html>