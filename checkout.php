    <?php
      include('./dbConnection.php');

      session_start();
      if(!isset($_SESSION['stuLogEmail'])){
        echo "<script> location.href = 'loginorsignup.php' </script>";
      }else{
        header("Pragma: no-cache");
	    header("Cache-Control: no-cache");
	    header("Expires: 0");
        $stuEmail = $_SESSION['stuLogEmail'];
        ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="GENERATOR" content="Evrsoft First Page">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CheckOut</title>
        <!---Bootstrap CSS--->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!---Font Awosome CSS--->
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" type="text/css"
            rel="stylesheet">

        <!--Custom CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!--------------------------------------------------------------->

    </head>

    <body>
        <div class="container" style="background-color: #DCDCDC;">
            <div class="row">
                <div class="col-sm-6 offset-sm4 jumbotron"> <br>
                    <h3 class="mb-5">Welcome to EduTech Payment Page</h3>
                    <form action="./PaytmKit/pgRedirect.php" method="post">
                        <div class="form-group row">
                            <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID:</label>
                            <div class="col-sm-8">
                                <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
                                    name="ORDER_ID" autocomplete="off"
                                    value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="CUT_ID" class="col-sm-4 col-form-label">Student Email:</label>
                            <div class="col-sm-8">
                                <input id="CUT_ID" class="form-control" tabindex="2" maxlength="12" size="12"
                                    name="CUT_ID" autocomplete="off"
                                    value="<?php if(isset($stuEmail)){ echo $stuEmail; }?>" readonly>
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount:</label>
                            <div class="col-sm-8">
                                <input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text"
                                    name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){ echo $_POST['id']; }?>"
                                    readonly>
                            </div>
                        </div> <br>
                        <div class="form-group row">

                            <!-- <label for="INDUSTRY_TYPE_ID" class="col-sm-4 col-form-label">INDUSTRY TYPE ID</label>-->

                            <div class="col-sm-8">
                                <input type="hidden" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4"
                                    maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"
                                    readonly>
                            </div>
                        </div> <br>
                        <div class="form-group row">

                            <!-- <label for="CHANNEL_ID" class="col-sm-4 col-form-label">CHANNEL ID</label>-->

                            <div class="col-sm-8">
                                <input type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12"
                                    size="12" name="CHANNEL_ID" autocomplete="off" value="WEBs" readonly>
                            </div>
                        </div> <br>
                        <div class="text-center">
                            <input value="Checkout" type="submit" class="btn btn-primary" onclick="">
                            <a href="./courses.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form> <br>
                    <small class="form-text text-muted"> Note: Complete Payment by Clicking Checkout Button</small>
                </div>
            </div>
        </div>

        <?php
    }

    ?>