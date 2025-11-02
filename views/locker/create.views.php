<?php
require base_path('views/head.views.php');
require base_path('views/header.views.php');
?>


<main class="locker-form">
  <h3>Apply for locker no: <span><?= $locker_id ?></span></h3>
  <form action="/locker/store" method="POST" class="form_container">
    <fieldset>
      <legend>Student Details</legend>
      <p class="subheading">Enter student details below to apply for a locker.</p>
      <label for="student number">Student number:</label>
      <input type="text" placeholder="eg. 00000" name="student_number" class="input">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="eg. John Doe" class="input">
      <label for="grade">Grade</label>
      <select name="grade" class="input">
        <option value="">Select a grade</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </fieldset>
    <button type="submit" class="submit_button">Apply for locker</button>
  </form>
</main>
</body>

</html>