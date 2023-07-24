<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="website icon" type="png" href="image/Logo/home.png">

    <!---Bootstrap CSS--->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!---Font Awosome CSS--->
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" type="text/css" rel="stylesheet">

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <!--Testimonials-->
    <link rel="stylesheet" type="text/css" href="./css/Testimonial.css">

</head>

<body>

<!-------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------->

<!--Start Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark p-2 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">EduTech</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav p-3">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>

        <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        } else {
          echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCent">Login</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link"  data-bs-toggle="modal" data-bs-target="#stuRegModalCent">Signup</a></li>';
        }
        
        ?>
        <li class="nav-item custom-nav-item"><a href="Feedback.php" class="nav-link">Feedback's</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--End Navigation-->