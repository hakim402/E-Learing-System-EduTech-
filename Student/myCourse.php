     <?php
     if(!isset($_SESSION)){
        session_start();
     }
      include('./stuInclude/header.php');
      include('../dbConnection.php');

      if(isset($_SESSION['is_login'])){
        $stuEmail = $_SESSION['stuLogEmail'];
    
    }else{
        echo "<script> location.href='../index.php'; </script>";
    }
      ?>

      <div class="container col-sm-9 mt-5 ml-6" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="jumbotron">
                <h4 class="text-center">All Courses</h4>
                <hr>
                <?php
                if(isset($stuLogEmail)){
                    $sql = "SELECT co.order_id, c.course_id, c.course_name, c.course_duration, c.course_desc, c.course_img, c.course_author, c.course_original_price, c.course_price FROM courseorder AS co JOIN course AS c ON c.course_id = co.course_id WHERE co.stu_email = '$stuLogEmail'";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){ ?>

                        
                        <div class="bg-light mb-4">
                            <h5 class="card-header"><?php echo $row['course_name']; ?></h5>
                            <div class="col-sm-2">
                                <img src="<?php echo $row ['course_img']; ?>" alt="Course IMG" class="card-img-top mt-4" alt="Pic">
                            </div>
                            <div class="col-sm-9 mb-3">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row ['course_desc']; ?></p>
                                    <small class="card-text">Duration: <?php echo $row['course_duration']; ?></small> <br>
                                    <small class="card-text">Instructor: <?php echo $row['course_author']; ?></small> <br>
                                    <p class="card-text d-inline">Price: <small><del><?php echo $row['course_original_price'] ?>AFN</del></small> <span class="font-weight-bolder"><?php echo $row['course_price'] ?>AFN</span></p> <br> <br>
                                    <a href="watchcourse.php?course_id=<?php echo $row['course_id'] ?>" class="btn btn-primary mt-6 float-right">Watch Course</a>
                                </div>
                            </div>
                        </div>
                     </div>
                     <?php
                        }
                    }
                }
                     ?>
                </div>
             </div>
            </div>
    



      <?php
        include('./stuInclude/footer.php');
       ?>