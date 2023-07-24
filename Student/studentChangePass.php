<?php
// Locking Admin file 
if(!isset($_SESSION)){
    session_start();
}
include('./stuInclude/header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];

}else{
    echo "<script> location.href='../index.php'; </script>";
}

if(isset($_REQUEST['stuPassUpdateBtn'])){
    if(($_REQUEST['stuNewPass'] == "")){
        //msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" rol="alert">Fill All Fields</div>';
    } else {
        $sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
        $result = $conn->query($sql);
    if($result->num_rows == 1){
        $stuPass = $_REQUEST['stuNewPass'];
        $sql = "UPDATE student SET stu_pass = '$stuPass' WHERE stu_email = '$stuEmail'";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" rol="alert">Updated Successfully</div>';
        } else {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" rol="alert">Unable to Update</div>';
        }
      }
    }
}
?>

<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mx-5 mt-5" action="" method="post">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                     <label for="inputEmail">Email:</label>
                     <input type="text" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo $stuEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stuNewPass">New Password:</label>
                    <input type="password" class="form-control" placeholder="New Password" id="stuNewPass" name="stuNewPass"> 
                </div> <br>
                    <button type="submit" class="btn btn-primary mr-4 mt-4" id="stuPassUpdateBtn" name="stuPassUpdateBtn">Update</button>
                    <button type="rest" class="btn btn-secondary mt-4">Rest</button>
            <?php if(isset($passmsg)){echo $passmsg;} ?>
         </form>
        </div>
    </div>
</div>

</div> <!--Close Row Div form header file-->






<?php
include('./stuInclude/footer.php');
?>