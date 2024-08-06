<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment Gateway</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script>
	document.write(Date());
</script>

<style>
body{
	background-image: url("images/bg2.jpg");
	background-color: #cccccc;
	background-size: cover;
}
.panel-default{
	background-image: url("images/AdobeStock_291217289-copy.jpg");
	background-size: cover;
}
.cls{
	width:300px;
	height:300px;
}
.clss{
  background-color:green;
  padding:8px;
  border-radius:5px;
}
.button-3{
	color:white;
}

</style>

</head>

<body>
<?php 
session_start();
include('include/header.php');
?>
<?php include('include/container.php');?>
<div class="container">	
	<div class="row">	
		<center><h2>Payment Gateway</h2></center>
		<div class="panel panel-default">			
			<div class="panel-heading">SGT- Buy Tickets</div>
			<div class="panel-body">
				<form action="process.php" method="POST" id="paymentForm">	
					<div class="row">
						<div class="col-md-8">
							<h4 align="center" >Ticket Details</h4><br>
							<div class="form-group">
								<label><b>Select Date : <span class="text-danger">*</span></b></label>
								<input type="date" name="ticketDate" id="date" class="form-control" value="" required>
								<span id="errorDate" class="text-danger"></span><br>
							</div>
							<div class="form-group">
								<label><b>Select Time : <span class="text-danger">*</span></b></label>
								<input type="time" name="ticketTime" id="time" class="form-control" value="" required>
								<span id="errorTime" class="text-danger"></span><br>
							</div>
							<div class="form-group">
								<label><b>Select Category : &nbsp&nbsp&nbsp <span class="text-danger">*</span></b></label>
								<select name="category" id="category" style="width:250px;height:40px" required>
								<option value="Singing">Singing</option>
								<option value="Dancing">Dancing</option>
								</select><br>
							</div>
							<div class="form-group">
								<label><b>Select Ticket Price :  <span class="text-danger">*</span></b></label>
								<select name="T_price" id="T_price" style="width:250px;height:40px" required>
								<option value="RS.1000.00">RS.1000.00</option>
								<option value="RS.1500.00">RS.1500.00</option>
								<option value="RS.2000.00">RS.2000.00</option>
								<option value="RS.2500.00">RS.2500.00</option>
								<option value="RS.5000.00">RS.5000.00</option>
								</select><br>
							</div>
							<div class="form-group">
								<label><b>Number of Tickets : <span class="text-danger">*</span></b></label>
								<input type="text" name="noOfTickets" id="ticket" class="form-control" value="" required>
								<span id="errorTicket" class="text-danger"></span><br>
							</div>
							<hr>
							<h4 align="center">Payment Details</h4><br>
							<center>
								<img src="images/card_img.png" alt="">
							</center><br>
							<div class="form-group">
								<label><b>Card Holder Name <span class="text-danger">*</span></b></label>
								<input type="text" name="cust_name" id="customerName" class="form-control" value="" required>
								<span id="errorCustomerName" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label><b>Email Address <span class="text-danger">*</span></b></label>
								<input type="email" name="cust_email" id="emailAddress" class="form-control" value="" required>
								<span id="errorEmailAddress" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label>Card Number <span class="text-danger">*</span></label>
								<input type="text" name="card_number" id="cardNumber" required class="form-control" placeholder="1234 5678 9012 3456" maxlength="16" onkeypress="">
								<span id="errorCardNumber" class="text-danger"></span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Expiry Month</label>
										<input type="text" name="card_exp_month" required id="cardExpMonth" class="form-control" placeholder="MM" maxlength="2" onkeypress="return validateNumber(event);">
										<span id="errorCardExpMonth" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>Expiry Year</label>
										<input type="text" name="card_exp_year" required id="cardExpYear" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardExpYear" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>CVC</label>
										<input type="text" name="card_cvc" required id="cardCVC" class="form-control" placeholder="123" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardCvc" class="text-danger"></span>
									</div>
								</div>
							</div>
							<br>
							<div align="center">
							<input type="submit" name="payNow" id="payNow" class="btn btn-success btn-sm" value="Proceed to Pay">
				
							<span class="clss"><a href="new.php" class="button-3"><label><b>Get Payment Summary</b></label></a></span>
              				<span class="clss"><a href="homenew.php" class="button-3"><label><b>Go To Homepage</b></label></a></span>
							</div>
							<br>
						</div>
						<div class="col-md-4">
							<br><br><br><br><br><br><br>
							<img src="images/47.jpg" alt="" class="cls">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>
</body>
</html>

