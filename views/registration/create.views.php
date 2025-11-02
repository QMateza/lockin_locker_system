<?php
require base_path('views/partials/head.views.php');
require base_path('views/partials/aside.views.php');
?>

<body>

  <div class="container one-half">

    <div class="inner_container">
      <h1>Signup</h1>
      <p>Your space, your locker — signup to get yours.</p>
      <form action="/register" method="POST" class="form_container form_overflow">
        <fieldset>
          <legend>Contact</legend>
          <label for="title">Title</label>
          <select name="title" id="" class="input">
            <option value="">Select a title</option>
            <option value="Mr">Mr</option>
            <option value="Ms">Ms</option>
            <option value="Mrs">Mrs</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
          </select>
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="eg: John Doe" class="input">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="eg: name@email.com" class="input">
          <label for="phone">Phone</label>
          <input type="telephone" name="phone" placeholder="eg: 0000000000" class="input">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Password" class="input">
          <label for="password">Confirm Password</label>
          <input type="password" name="password" placeholder="Password" class="input">
        </fieldset>
        <fieldset>
          <legend>Personal Details</legend>
          <label for="id_number">ID Number</label>
          <input type="text" name="id_number" placeholder="eg: 0000000000000" class="input">
          <label for="street">Street</label>
          <input type="text" name="street" placeholder="eg: Street Address" class="input">
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