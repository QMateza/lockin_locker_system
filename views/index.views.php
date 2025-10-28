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
        <p>Your space, your locker — signup to get yours.</p>
        <form action="/register" method="POST" class="form_container">
          <label for="title">Title</label>
          <select name="title" id="" class="input">
            <option value="">Mr</option>
            <option value="">Ms</option>
            <option value="">Mrs</option>
            <option value="">Dr</option>
            <option value="">Prof</option>
          </select>
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="eg: John Doe" class="input">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="eg: name@email.com" class="input">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Password" class="input">
          <button type="submit" class="submit_button">Sign up</button>
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