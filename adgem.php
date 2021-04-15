<?php 

session_start(); 
include 'connection.php';


$id = $_GET["player_id"]; 
$old = $_GET["campaign_id"]; 
$amount = $_GET["amount"]; 
$user_id = $_GET["UsID"];



if(!isset($_SESSION['UID'])) {
	echo '<script type="text/javascript" language="Javascript">  
	alert("Not Logged In")  
	</script> ';
}else{
	
		$resRec = mysqli_query($con,"SELECT AdgemPonits FROM users WHERE Username LIKE '$user_id' LIMIT 1");
		$roww = mysqli_fetch_object($resRec);
		$coins = $row->coins;
		$coins = $coins + $amount;
		
	    mysqli_query($con,"UPDATE users SET AdgemPonits = '$coins' WHERE Username LIKE '$user_id' LIMIT 1");

}	
// securely supply the static whitelist ip and your secret postback key using env variables
define('ADGEM_WHITELIST_IP', $_ENV['ADGEM_WHITELIST_IP']);
define('ADGEM_POSTBACK_KEY', $_ENV['ADGEM_POSTBACK_KEY']);

// verify the static IP
if(ADGEM_WHITELIST_IP !== $_SERVER['REMOTE_ADDR']) {
    http_response_code(403);
    exit('Error: '.$_SERVER['REMOTE_ADDR'].' does not match the whitelisted IP address.'); 
}

// get the full request url
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$request_url = "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// parse the url and query string
$parsed_url = parse_url($request_url);
parse_str($parsed_url['query'], $query_string);

// get the verifier value
$verifier = $query_string['verifier'] ?? null;
if (is_null($verifier)) {
    http_response_code(422);
    exit("Error: missing verifier");
}

// rebuild url without the verifier
unset($query_string['verifier']);
$hashless_url = $protocol.'://'.$parsed_url['host'].$parsed_url['path'].'?'.http_build_query($query_string, "", "&", PHP_QUERY_RFC3986);

// calculate the hash and verify it matches the provided one
$calculated_hash = hash_hmac('sha256', $hashless_url, ADGEM_POSTBACK_KEY);
if ($calculated_hash !== $verifier) {
    http_response_code(422);
    exit('Error: invalid verifier');
}

// valid, it is safe to process the postback

http_response_code(200);
exit('OK');
?>