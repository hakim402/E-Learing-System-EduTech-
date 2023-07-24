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


<div class="col-sm-9 mt-2">
    <div class="container">
<h2 class="text-center my-4">Sell Report</h2>
    <form action="" method="POST">
        <input type="date" class="from-control mx-2 p-1 mb-2" id="startdate" name="startdate">
        <span> to </span>
        <input type="date" class="from-control mx-2 p-1 mb-2" id="enddate" name="enddate">
        <input type="submit" class="btn btn-primary p-1 mb-2" name="searchsubmit" id="Search" value="Search">
    </form>
    <?php
    if(isset($_REQUEST['searchsubmit'])){
        $startdate = $_REQUEST['startdate'];
        $enddate = $_REQUEST['enddate'];

        $sql = "SELECT * FROM courseorder WHERE order_date BETWEEN '$startdate' AND '$enddate'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo 
            '<p class="bg-dark text-white p-2 mt-4">Details</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Course ID</th>
                        <th scope="col">Student Email</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
            <tbody>';
                while($row = $result->fetch_assoc()){
                    echo
                    '<tr>
                        <th scope="row">'.$row["order_id"].'</th>
                        <td>'.$row["course_id"].'</td>
                        <td>'.$row["stu_email"].'</td>
                        <td>'.$row["status"].'</td>
                        <td>'.$row["order_date"].'</td>
                        <td>'.$row["amount"].'</td>
                    </tr>';
                }
                echo 
                '<tr>
                    <td>
                        <form class="d-print-none">
                            <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>';
        } else {
            echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>No Records Found !</div>";
        }
    }
    ?>
</div>
</div>
</div>

</div>
</div>
<?php
include('./adminInclude/footer.php');
?>