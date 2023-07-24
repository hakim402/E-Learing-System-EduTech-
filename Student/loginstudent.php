<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbConnection.php');

// Student Login Verification
if(!isset($_SESSION['is_login'])){
if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){

    $stuLogEmail = $_POST['stuLogEmail'];
    $stuLogPass = $_POST['stuLogPass'];

    $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";

    $result = $conn->query($sql);
    $row = $result->num_rows;
    if($row === 1){ 
        $_SESSION['is_login'] = true;
        $_SESSION["stuLogEmail"] = $stuLogEmail;
        echo json_encode($row);
    } else if($row === 0){
        echo json_encode($row);
    }
} 
}
?>