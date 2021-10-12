<?php

$book_id = $_GET['bookingid'];

 $bookingview=$this->football_model->academy_booking_payment_view($book_id);
 if (!empty($bookingview)) {
	foreach ($bookingview as $store) {
		$order_id = $store->booking_code;
		$amount = $store->booking_amount;
		//$amount = '1';
		$billing_email = $store->player_email;
		$billing_tel = $store->player_mnumber;
	}
}

//45524

$keyview=$this->football_model->get_payment_gateway_key_details();
$merchantid = $keyview['merchant_id'];
?>

<html>
<head>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
		 document.forms['customerData'].submit();
	};
</script>
</head>
<body>

<div id="mainBody">
<div class = "span12" id = "disp-alert"></div>

	<div class="container">
		<div class="row">
		   <div class="row-below">
		   
			<form method="post" name="customerData" action="<?php echo base_url()."academySendRequest"; ?>" accept-charset="ISO-8859-1">
		
				
				<input type="hidden" name="tid" id="tid"  />
				<input type="hidden" name="merchant_id" value="<?php echo $merchantid; ?>"  />
				<input type="hidden" name="order_id" value="<?php echo $order_id; ?>"/>
				<input type="hidden" name="amount" value="<?php echo $amount; ?>"/>
				<input type="hidden" name="billing_email" value="<?php echo $billing_email; ?>"/>				
				<input type="hidden" name="billing_tel" value="<?php echo $billing_tel; ?>"/>
				
				
				<input type="hidden" name="language" value="EN"/>
			
				<input type="hidden" name="currency" value="AED"/>
				<input type="hidden" name="redirect_url" value="<?php echo base_url()."academyGetResponse"; ?>"/>
				<input type="hidden" name="cancel_url" value="<?php echo base_url()."academyGetResponse"; ?>"/>
				<input type="hidden" name="billing_name" value="Charli"/>
				<input type="hidden" name="billing_address" value="Room no 1101, near Railway station Ambad"/>
				<input type="hidden" name="billing_city" value="Indore"/>
				<input type="hidden" name="billing_state" value="MP"/>
				<input type="hidden" name="billing_zip" value="425001"/>
				<input type="hidden" name="billing_country" value="India"/>
				
				<input type="hidden" name="delivery_name" value="Chaplin"/>
				<input type="hidden" name="delivery_address" value="room no.701 near bus stand"/>
				<input type="hidden" name="delivery_city" value="Hyderabad"/>
				<input type="hidden" name="delivery_state" value="AP"/>
				<input type="hidden" name="delivery_zip" value="425001>"/>
				<input type="hidden" name="delivery_country" value="India"/>
				<input type="hidden" name="delivery_tel" value="9595226054"/>
				
				<input type="hidden" name="merchant_param2" value="additional Info."/>
				<input type="hidden" name="merchant_param3" value="additional Info."/>
				
				
				
		        <!--    <?php // echo $cart_data; ?>
		        <INPUT TYPE="submit" value="CheckOut">  -->
	      	
	      </form>
	      </div>
		</div>
		</div>
		</div>
	</body>
</html>


