<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment Summary</title>

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
	background-color: #000000;
	background-size: cover;
}
.button-3{
	background-color:green;
	padding:8px;
	color:white;
	border-radius:5px;
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
		<center><h2>PAYMENT SUMMARY</h2></center>
		<div class="panel panel-default">			
			<div class="panel-heading">SGT- Buy Tickets</div>
			<div class="panel-body">
				<form action="" method="POST" id="paymentForm">	
					<input type="text" name="cust_name" placeholder="Card Holder Name"/>
					<input type="submit" name="search" value="Search"/>
					<div class="table-responsive" id="order_table">
								<table class="table table-bordered table-striped">
									<tbody>
										<tr>  
											<th>Category</th>  
											<th>Ticket Quantity</th>  
											<th>Price</th>  
											 
										</tr>
										<?php
												$connection = mysqli_connect("localhost","root","");
												$db = mysqli_select_db($connection,'userregistration');

												if(isset($_POST['search'])){
													$customerName = $_POST['cust_name'];
													$query = "SELECT * FROM `transaction` where cust_name = '$customerName'";
						
													$query_run = mysqli_query($connection,$query);

													while($row = mysqli_fetch_array($query_run)){
													?>
													<tr>
														<td><?php echo $row['category']; ?></td>
														<td><?php echo $row['noOfTickets']; ?></td>
														<td><?php echo $row['T_price']; ?></td>
														
													</tr>

													<?php
													}
												}?>		
									</tbody>
						        </table>									
					</div>
					<center><a href="payment.php" class="button-3"><label><b>EXIT</b></label></a></center>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>					
</body>
</html>

