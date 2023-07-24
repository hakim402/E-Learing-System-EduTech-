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
    if(($_REQUEST['lesson_id'] == "") || ($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
   }else {

    $lesson_id = $_REQUEST['lesson_id'];
    $lesson_name = $_REQUEST['lesson_name'];
    $lesson_desc = $_REQUEST['lesson_desc'];
    $course_id = $_REQUEST['course_id'];
    $course_name = $_REQUEST['course_name'];
    $lesson_link = '../CourseVideos/'. $_FILES['lesson_link']['name'];

    $sql = "UPDATE lesson SET lesson_id = '$lesson_id', lesson_name = '$lesson_name', lesson_desc = '$lesson_desc',  lesson_link = '$lesson_link', course_id = '$course_id', course_name = '$course_name' WHERE lesson_id = '$lesson_id'";
    if($conn->query($sql) == TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successsfully</div>';
    } else{
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
    }

   }
}

?>


<div class="col-sm-6 mt-5 mx-3 jumbotron" style="background-color: #f0f0f0;">
    <h3 class="text-center">Update Lesson Details</h3>

    <?php 
    //show data 
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    
    ?>



    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_id">Lesson ID</label>
            <input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php if(isset($row['lesson_id'])){echo $row['lesson_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php if(isset($row['lesson_name'])){echo $row['lesson_name'];}?>">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" row=2
            ><?php if(isset($row['lesson_desc'])){echo $row['lesson_desc'];}?></textarea> 
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])){echo $row['course_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" onkeypress="isInputNumber(event)" value="<?php if(isset($row['course_name'])){echo $row['course_name'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php if(isset($row['lesson_link'])){echo $row['lesson_link']; }?>" allowfullscreen></iframe>
            </div>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
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