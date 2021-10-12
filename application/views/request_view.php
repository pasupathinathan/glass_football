<html>
<head>
<title> Street League</title>
</head>
<body>
<center>

<?php  include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$keyview=$this->football_model->get_payment_gateway_key_details();
	$db_working_key = $keyview['working_key'];
	$db_access_code = $keyview['access_code'];
	
	$merchant_data='';
	/* $working_key='778EF617D020B0772EA2478A1762C9F0';
	$access_code='AVXH03GG04AO67HXOA'; */
	
	$working_key=$db_working_key;
	$access_code=$db_access_code;

	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
	
//die(print_r($encrypted_data));


?>
<form method="post" name="redirect" action="https://secure.ccavenue.ae/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

