<?php
    session_start();
    include 'includes/autoloader.php';
    $_SESSION['user_check'] = "admin";
    include 'includes/checkLogin.php';
    include 'includes/adminHeader.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home</title>
</head>

<body>
  <div id="container" class="container">
    <div id="main">

    </div>
    <footer></footer>
  </div>
</body>

</html>