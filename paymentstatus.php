<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

    include('./mainInclude/header.php');
    include('./dbConnection.php');

	// following files need to be included
	require_once("./PaytmKit/lib/config_paytm.php");
	require_once("./PaytmKit/lib/encdec_paytm.php");

	$ORDER_ID = "";
	$requestParamList = array();
	$responseParamList = array();

	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

		// In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
		$ORDER_ID = $_POST["ORDER_ID"];

		// Create an array having all required parameters for status query.
		$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
		
		$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
		
		$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

		// Call the PG's getTxnStatusNew() function for verifying the transaction status.
		$responseParamList = getTxnStatusNew($requestParamList);
	}

?>

    <!-- Start Course Page Banner -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="image/Background/Payment.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- Start Course Page Banner -->

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->

<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
        <form method="post">
            <div>
                <label class="offset-sm-4 col-form-label">Order ID:</label>
                <input class="from-control mx-1 p-1" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" placeholder="Enter Order ID" value="<?PHP echo $ORDER_ID ?>">
                <input type="submit" class="btn btn-primary p-1 mb-2" value="View">
            </div>
        </form>
    </div>


    <div class="Container">
		<?php
		if (isset($responseParamList) && count($responseParamList)>0 )
		{ 
		?>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h2 class="text-center">Payment Receipt</h2>
                    <table class="table table-bordered">
                        <tbody>
                            <?php
                                foreach($responseParamList as $paramName => $paramValue) {
                                    if(($paramName == "ORDERID") || ($paramName == "TXNAMOUNT") || ($paramName == "STATUS")){ ?>
                            <tr >
                                <td><label><?php echo $paramName?></label></td>
                                <td><?php echo $paramValue?></td>
                            </tr>
                            <?php } } ?>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="javascript:window.print();">Print</button>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>

		<?php
		}
		?>
</div>

      <!-- Start Include Include Contact Us -->
      <?php
          include('./mainInclude/contact.php');
        ?> <br>
      <!-- End Include Include Contact Us -->
<!-------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------->

      <!-- Start Include Footer -->
      <?php
        include('./mainInclude/footer.php');
        ?>
      <!-- End Include Footer-->
