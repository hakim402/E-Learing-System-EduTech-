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
            <img src="image/Background/Feedback.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- End Course Page Banner -->

<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->

<!-- Start All Feedback's -->
<div class="cotainer-fluid mt-5" style="background-color: rgba(23,162,184,0.3);">
  <h1 class="text-center testyheading p-4">Feedback's</h1>
<div class="wrapper">
<?php
        $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
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
  </div>
 <!-- End All Courses -->

<!-------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------->
      
      <!-- Start Include Footer -->
      <?php
        include('./mainInclude/footer.php');
        ?>
      <!-- End Include Footer-->