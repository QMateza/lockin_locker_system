<?php
require base_path('views/partials/head.views.php');
require base_path('views/partials/aside.views.php');
?>

<div class="container one-half">

  <div class="inner_container">
    <h1>Administrator Signup</h1>
    <form action="/admin/register" method="POST" class="form_container form_overflow">
      <fieldset>
        <legend>Contact</legend>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="eg: John Doe" class="input">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="eg: name@email.com" class="input">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" class="input">
        <label for="password">Confirm Password</label>
        <input type="password" name="password" placeholder="Password" class="input">
      </fieldset>

      <button type="submit" class="submit_button">Sign up</button>
    </form>
    <p>Already have an account? <a href="/login">Login</a></p>
  </div>
  <footer>
    <p>Student Locker Booking System. Copyright &#169; <?= date('Y') ?></p>
  </footer>
</div>

</div>

</body>

</html>