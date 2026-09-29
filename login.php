<?php
require 'header.php';
?>

<main>

  <section class="login">

    <h1>Login</h1>

    <form>
      <input type="radio" id="student" name="userType" value="student">
      <label for="student">student</label>

      <input type="radio" id="admin" name="userType" value="admin">
      <label for="admin">admin</label>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>

  </section>

</main>