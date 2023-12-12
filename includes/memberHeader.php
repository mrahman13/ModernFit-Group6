<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/desktop.css">
  <style>
    a.none{
      text-decoration: none;
      color: inherit;
    }
    #logo img{
      width: 250px;
    }
  </style>
  <title>Member Header</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-dark navbar-expand-lg bg-black">
      <div class="container-fluid">
        <a href="memberHomepage" class="navbar-brand ms-xl-5" id="logo">
          <img class="logo ms-sm-3 ms-xl-4" src="../img/Modernfit_Logo.png" draggable="false">
        </a>
        <!-- <div id="logo" class="logo">
          <a href="home"><img src="" alt="ModernFit Logo"></a>
        </div> -->

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapseMember">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ps-sm-3 ps-lg-0" id="navbarCollapseMember">
          <div class="navbar-nav me-auto">
            <a class="nav-link" href="entryLog">Entry Log</a>
            <a class="nav-link" href="nutrition">Nutritional Info</a>
            <a class="nav-link" href="recipeViewer">Recipes</a>
            <a class="nav-link" href="tailoredProgram">Tailored Program</a>
            <a class="nav-link" href="workoutViewer">Workouts</a>
          </div>
          
          <button class="btn btn-outline-warning me-lg-3 me-xl-5">
            <a class="none" href="signOut">Sign Out</a>
          </button>
        </div>
      </div>
    </nav>
</body>
</html>