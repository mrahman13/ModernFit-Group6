<?php
    include 'includes/autoloader.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" media="only screen and (min-width: 720px)" href="css/desktop.css">
  <title>Program</title>
</head>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <!-- something for the drop down menu -->
      <div id="logo" class="logo">
        <a href="index.php"><img src="" alt="ModernFit Logo"></a>
      </div>
      <nav id="header-nav">
        <ul>
          <li><a href="includes/signOut.php">Sign Out</a></li>
        </ul>
      </nav>
    </header>
    <div id="main">
      <a href="entryLog.php">Entry Log</a>
      <a href="nutritionalInfo.php">Nutritional Info</a>
      <a href="tailoredProgram.php">Tailored Program</a>
    </div>
    <footer></footer>
  </div>
</body>

</html>