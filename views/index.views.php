<?php
require base_path('views/header.views.php');
?>



<div class="container">
  <div class="welcome">
    <h5>The student locker booking system</h5>
  </div>

  <div class="inner_container">
    <h1>Signup</h1>
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

</div>
<footer>
  <p>Student Locker Booking System. Copyright &#169; <?= date('Y') ?></p>
</footer>
</body>

</html>