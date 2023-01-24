<?php 
  include_once("../controller/config.php");
  $sql = "SELECT * FROM data_submissions ORDER BY id DESC";
  $result = $conn->query($sql); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Wholesome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/favicon/favicon.png"
    />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/login.css" />
  </head>
  <body class="signin-page">
    <div class="container">
      <form id="signinForm" class="p-5">
        <h1 class="mb-5 text-grad">Log in to admin panel</h1>
        <div class="form-group mb-5">
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            class="w-100"
            placeholder="Username"
            required=""
          />
        </div>
        <div class="form-group mb-5">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            class="w-100"
            placeholder="Password"
            required=""
          />
        </div>
        <div class="">
          <button type="submit" class="w-100" id="signinBtn">Sign in</button>
        </div>
        <div class="error-msg-box"></div>
      </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/alert.js"></script>
    <script src="./assets/js/login.js"></script>
  </body>
</html>
