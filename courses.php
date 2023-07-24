    <!--Start Include Navigation-->
    <?php
      include('./mainInclude/header.php');
      ?>
    <!--End Include Navigation-->

    <?php
      include('./dbConnection.php');
      ?>

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!-- Start Course Page Banner -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="image/Background/Course.jpg" alt="courses"
                style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- End Course Page Banner -->

    <!------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------->

    <!-- Start All Course -->
    <div class="container mt-5" style="background-color: rgba(23,162,184,0.3);">
        <h1 class="text-center">All Courses</h1> <br>
        <!-- Start 1st Card-->
        <div class="row mt-4">
            <?php
  $sql = "SELECT * FROM course";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $course_id = $row['course_id'];
      echo '
       <div class="col-sm-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">'.$row['course_name'].'</h5>
            <img src="'.str_replace('..', '.', $row['course_img']).'" width="200px" alt="Course IMG">
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
    </div>
    </div>
    <!-- End All Courses -->


    <!-- Start Include Footer -->
    <?php
        include('./mainInclude/footer.php');
        ?>
    <!-- End Include Footer-->