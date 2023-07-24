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
            <img src="image/Background/1.jpg" alt="courses"
                style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- Start Course Page Banner -->

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!-- Start Main Content -->
    <div class="container mt-5">

        <?php
    if(isset($_REQUEST['course_id'])){
        $course_id = $_REQUEST['course_id'];
        $_SESSION['course_id'] = $course_id;
        $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>

        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo str_replace('..', '.', $row['course_img']) ?>" class="card-img-top"
                    alt="Course IMG">
            </div>
            <div class="col-md-8">
                <div card-body>
                    <h5 class="card-title">Course Name: <?php echo $row['course_name'] ?></h5>
                    <p class="card-text">Description: <?php echo $row['course_desc'] ?></p>
                    <p class="card-text">Duration: <?php echo $row['course_duration'] ?></p>
                    <form action="checkout.php" method="post">
                        <p class="card-text d-inline">Price: <small><del><?php echo $row['course_original_price'] ?>
                                    AFN</del></small> <span
                                class="font-weight-bolder"><?php echo $row['course_price'] ?> AFN</span></p>
                        <input type="hidden" name="id" value="<?php echo $row['course_price'] ?>">
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right mx-5 p-1"
                            name="Buy">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson NO.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $num = 0;
            while($row = $result->fetch_assoc()){
                if($course_id == $row['course_id']){
                    $num ++;
            echo '<tr>
                       <th scope="row">'.$num.'</th>
                       <td>'.$row['lesson_name'].'</td>
                   </tr>';
            }
        }
        }
        ?>


                </tbody>
            </table>
        </div>
    </div>
    <!-- End Main Content -->

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->



    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!-- Start Include Footer -->
    <?php
        include('./mainInclude/footer.php');
        ?>
    <!-- End Include Footer-->

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->