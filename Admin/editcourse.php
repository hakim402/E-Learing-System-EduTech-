<!-- Start Include Admin Dashboard Header -->
<?php
// Locking Admin file 
if(!isset($_SESSION)){
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminLogEmail'];

}else{
    echo "<script> location.href='../index.php'; </script>";
}
//update data
if(isset($_REQUEST['requpdate'])){
    //checking for empty fields
    if(($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_original_price'] == "") || ($_REQUEST['course_price'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
   }else {

    $course_id = $_REQUEST['course_id'];
    $course_name = $_REQUEST['course_name'];
    $course_desc = $_REQUEST['course_desc'];
    $course_author = $_REQUEST['course_author'];
    $course_duration = $_REQUEST['course_duration'];
    $course_price = $_REQUEST['course_price'];
    $course_original_price = $_REQUEST['course_original_price'];
    $course_img = '../image/Courses/'. $_FILES['course_img']['name'];

    $sql = "UPDATE course SET course_id = '$course_id', course_name = '$course_name', course_desc = '$course_desc', course_author = '$course_author', course_duration = '$course_duration', course_price = '$course_price', course_original_price = '$course_original_price', course_img = '$course_img' WHERE course_id = '$course_id'";
    if($conn->query($sql) == TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successsfully</div>';
    } else{
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
    }

   }
}

?>


<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color: #f0f0f0;">
    <h3 class="text-center">Update Courses Details</h3>

    <?php 
    //show data 
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    
    ?>



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])){echo $row['course_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){echo $row['course_name'];}?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2
            ><?php if(isset($row['course_desc'])){echo $row['course_desc'];}?></textarea> 
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php if(isset($row['course_author'])){echo $row['course_author'];}?>">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if(isset($row['course_duration'])){echo $row['course_duration'];}?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if(isset($row['course_original_price'])){echo $row['course_original_price'];}?>">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php if(isset($row['course_price'])){echo $row['course_price'];}?>">
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="course_img">Course Image</label><br>
            <img class="img-thumbnail" src="<?php if(isset($row['course_img'])){echo $row['course_img'];}?>" alt="">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)){echo $msg;} ?>
    </form>
</div>

</div> <!-- div Row Close form Header -->
</div> <!-- div container-fluid Close form Header -->





<!-- Start Include Admin Dashboard Footer -->
<?php
include('./admininclude/footer.php');
?>
<!-- End Include Admin Dashboard Footer -->