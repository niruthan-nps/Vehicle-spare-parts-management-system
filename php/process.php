<?php 
session_start();
require 'config.php';

    $customerName = $_POST['cust_name'];
    $emailAddress = $_POST['cust_email'];
	$category = $_POST['category'];
	$ticketDate = $_POST['ticketDate'];
	$ticketTime = $_POST['ticketTime'];
	$noOfTickets = $_POST['noOfTickets'];
    $cardNumber = $_POST['card_number'];
    $cardCVC = $_POST['card_cvc'];
    $cardExpMonth = $_POST['card_exp_month'];
    $cardExpYear = $_POST['card_exp_year']; 
    $T_price = $_POST['T_price']; 
    


$query = mysqli_query($con, "INSERT INTO `transaction`(`id`, `cust_name`, `cust_email`, `category`, `ticketDate`, `ticketTime`,`noOfTickets`,`card_number`,`card_cvc`,`card_exp_month`,`card_exp_year`,`T_price`) VALUES ('','$customerName','$emailAddress','$category','$ticketDate','$ticketTime','$noOfTickets','$cardNumber','$cardCVC','$cardExpMonth','$cardExpYear','$T_price')");
echo '<script>alert("Payment Completed!"); location.replace(document.referrer);</script>';


?>



