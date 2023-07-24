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
?>
<!-- Start Form -->
<div class="col-sm-9 mt-3 mx-3">
<h2 class="text-center my-2">View Lesson Details</h2>
<div class="col-sm-3 mt-2 mx-2">
    <form action="" class="mt-2 form-inline d-print-none">
        <div class="input-group">
            <input type="text" placeholder="Enter Course ID" class="form-control" id="checkid" name="checkid">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
<!-- End Form -->
    <?php

      $sql = "SELECT course_id FROM course";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
        if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
            $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['checkid']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if(($row['course_id']) == $_REQUEST['checkid']){
                $_SESSION['course_id'] = $row['course_id'];
                $_SESSION['course_name'] = $row['course_name'];
    ?>
        
            <h3 class="mt-3 bg-dark text-white p-1">Course ID: <?php if(isset($row['course_id'])){ echo $row['course_id']; } ?> Course Name: <?php if(isset($row['course_name'])){ echo $row['course_name']; } ?></h3>

    <?php
    $sql = "SELECT * FROM lesson WHERE course_id = {$_REQUEST['checkid']}";
    $result = $conn->query($sql);
    echo '<table class="table">
                <thead>
                <tr>
                <th scope="col">Lesson ID</th>
                <th scope="col">Lesson Name</th>
                <th scope="col">Lesson Link</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>';
                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '<th scope="row">'.$row["lesson_id"].'</th>';
                    echo '<td>'.$row["lesson_name"].'</td>';
                    echo '<td>'.$row["lesson_link"].'</td>';
                    echo '<td>
                     <form action="editlesson.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='.$row["lesson_id"] .'>
                     <button type="submit" class="btn btn-info mr-3" name="view" value="View">
                     <i class="fas fa-pen"></i> 
                     </button> 
                     </form>
                     <form action="" method="POST" class="d-inline">
                     <input type="hidden" name="id" value='.$row["lesson_id"] .'>
                     <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                     <i class="far fa-trash-alt"></i> 
                     </button> 
                     </form>
                     </td>
                     </tr>';
                    }
                echo '</tbody>
                </table>';
         } else {
            echo '<div class="alert alert-dark mt-4" rol="alert">Course Not Found</div>';
         }
         if(isset($_REQUEST['delete'])){
            $sql = "DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
            if($conn->query($sql) === TRUE){
            echo "Record Deleted Successfully";
            //below code will refresh the page after deleting the record
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
         } else {
            echo "Unable to Delete Data";
         }
        }
     }
}     
    ?>
</div>
<?php
if(isset($_SESSION['course_id'])){
    echo '<div>
    <a class="btn btn-danger box" href="./addLesson.php"> <i class="fas fa-plus fa-2x"></i></a>
</div>';
}
?>





<!-- Start Include Admin Dashboard Footer -->
<?php
include('./admininclude/footer.php');
?>
<!-- End Include Admin Dashboard Footer -->