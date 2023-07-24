<!--Start Include Navigation-->
<?php
      include('./dbConnection.php');
  ?>
<?php
      include('./mainInclude/header.php');
      ?>
<!--End Include Navigation-->


<!--Start Background Video -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/Technology.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to Educational Technology</h1>
        <small class="my-content">Learn and Implement</small> <br>

        <?php
    if(!isset($_SESSION['is_login'])){
      echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCent">Get Started </a>';
    } else {
      echo '<a href="student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
    }
    ?>

    </div>
</div>
<!--End Background Video-->


<!--Start Include Text Banner-->
<?php
        include('./mainInclude/TextBanner.php')
        ?>
<!-- End Include Text Banner -->


<!-- Start Most Popular Course -->
<div class="container mt-5" style="background-color: rgba(23,162,184,0.3);">
    <h1 class="text-center">Popular Courses</h1> <br>
    <div class="row">
        <?php
  $sql = "SELECT * FROM course LIMIT 6";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $course_id = $row['course_id'];
      echo '
       <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">'.$row['course_name'].'</h5>
            <img src="'.str_replace('..', '.', $row['course_img']).'" width="200px" alt="C++">
            <p class="card-text">'.$row["course_desc"].'</p>
            <div class="card-footer">
              <p class="card-text d-inline">Price <small><del>'.$row["course_original_price"].' AFN </del></small><span  class="font-weight-bolder">// '.$row["course_price"].' AFN</span></p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
            </div>
          </div>
        </div>
      </div>';
    }
  }
  ?>
    </div>
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm-4 mb-4 mt-4" href="courses.php">View All Courses</a>
    </div>
</div>
<!-- End Most Popular Course -->


<!-- Start Include Include Contact Us -->
<?php
          include('./mainInclude/contact.php');
        ?>
<!-- End Include Include Contact Us -->


<!-- Start Student Testimoial -->
<div class="cotainer-fluid mt-5" style="background-color: rgba(23,162,184,0.3);">
    <h1 class="text-center testyheading p-4"> Student's Feedback's</h1>
    <div class="wrapper">
        <?php
        $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id  LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
        $s_img = $row['stu_img'];
        $n_img = str_replace('..', '.', $s_img);
        ?>
        <div class="box">
            <i class="fas fa-quote-left quote"></i>
            <p><?php echo $row['f_content']?></p>
            <div class="content">
                <div class="info">
                    <div class="name"><?php echo $row['stu_name']?></div>
                    <div class="job"><?php echo $row['stu_occ']?></div>
                </div>
                <div class="image">
                    <img src="<?php echo $n_img ?>" alt="">
                </div>
            </div>
        </div>

        <?php
        }
      }
      ?>
    </div>
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm-4 mb-4 mt-4" href="Feedback.php">View All Feedback's</a>
    </div>
</div>
<!-- End Student Testimoial -->


<!-- Start Include Social Follow -->
<?php
      include('./mainInclude/SocialFollow.php')
  ?>
<!-- End Include Social Follow -->


<!-- Start Include About Section -->
<?php 
          include('./mainInclude/AboutSection.php')
        ?>
<!-- End Include About Section -->


<!-- Start Include Footer -->
<?php
        include('./mainInclude/footer.php');
        ?>
<!-- End Include Footer-->