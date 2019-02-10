
<?php

if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$message = $_POST['message'];
	$mailFrom = $_POST['email'];
	$fromDate = $_POST['fromDate'];
	$toDate = $_POST['toDate'];
	
	$mailTo = "info@villasgetaway.com";
	$headers = "From: ".$message;
	$txt = " (TROPICAL) You have received an e-mail from ".$name.".\n\n".$mailFrom." From date".$fromDate." to date ".$toDate;

	mail($mailTo, $txt, $headers);
}

?>
