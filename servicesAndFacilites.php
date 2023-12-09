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
  <title>Services and Facilities</title>
</head>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <!-- something for the drop down menu -->
      <div id="logo" class="logo">
        <a href="index"><img src="" alt="ModernFit Logo"></a>
      </div>
      <nav id="header-nav">
        <ul>
          <li><a href="signOut">Sign Out</a></li>
        </ul>
      </nav>
    </header>
    <div id="main">
      <div id="services-container" class="services-container">
        <h1>Services</h1>
        <ul>
          <li>Monitor your progress with the progress tracker, everything is put into easy-to-read graphs/charts.</li>
          <li>We offer tailored programs catered to each members individual needs, these programs are made by our team of personal trainers.</li>
          <li>The team of personal trainers also offer nutritional guidance, this caters to the members goals, whether they eat meat or are vegan.</li>
        </ul>
      </div>
      <div id="facilities-container" class="facilities-container">
        <h1>Facilities</h1>
        <ul>
          <li>Indoor heated swimming pool for exercise in the water.</li>
          <li>In our sauna and steam room, unwind and rest.</li>
          <li>A variety of cardio machines are available, including treadmills, elliptical trainers, and stationary bikes.</li>
        </ul>
      </div>
    </div>
    <footer></footer>
  </div>
</body>

</html>