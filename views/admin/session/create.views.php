<?php
require base_path('views/partials/head.views.php');
require base_path('views/partials/aside.views.php');
?>

<div class="container one-half">

  <div class="inner_container">
    <h1>Admin Login</h1>
    <div class="account-type">
      <a href="/">as Parent</a><a href="/admin/create">as Administrator</a>
    </div>
    <form action="/admin/session/create" method="POST" class="form_container">
      <fieldset>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="eg: name@email.com" class="input">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" class="input">
      </fieldset>

      <button type="submit" class="submit_button">Login</button>
    </form>
    <p>Don't have an account yet? <a href="/admin/register">Admin Signup</a></p>
  </div>
  <footer>
    <p>Student Locker Booking System. Copyright &#169; <?= date('Y') ?></p>
  </footer>
</div>

</div>

</body>

</html>