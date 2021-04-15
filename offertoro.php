<?php 
session_start(); 
include 'connection.php';


$id = $_GET["id"]; 
$old = $_GET["old"]; 
$amount = $_GET["amount"]; 
$currency_name = $_GET["currency_name"];
$user_id = $_GET["UsID"];
$payout = $_GET["payout"]; 
$o_name = $_GET["o_name"]; 
$sig = $_GET["sig"]; 

if(!isset($_SESSION['UID'])) {
	echo '<script type="text/javascript" language="Javascript">  
	alert("Not Logged In")  
	</script> ';
}else{
	
		$resRec = mysqli_query($con,"SELECT OffertoroPoints FROM users WHERE Username LIKE '$user_id' LIMIT 1");
		$row = mysqli_fetch_object($resRec);
		$coins = $row->coins;
		$coins = $coins + $amount;
		
	    mysqli_query($con,"UPDATE users SET OffertoroPoints= '$coins' WHERE Username LIKE '$user_id' LIMIT 1");

}			
echo 1; //This don't work
?>