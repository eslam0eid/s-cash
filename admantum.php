<?php
/*
 * @AdMantum
 *
 * Postback Example Script.  This script is meant to only be a rough outline of
 * how a postback should operate, and not necessarily used out of the box.
 * 
 * Copyright 2020. AdMantum. All Rights Reserved
 */

// Setup postback variables.  For a complete list of parameters visit https://admantum.com/documentation/#pb-parameters

$userId =            $_REQUEST['uid'];
$offerId =    $_REQUEST['of_id'];
$offerName =    $_REQUEST['of_name'];
$virtual_currency = $_REQUEST['virtual_currency'];

// Check your app user from database against the recievd userId and reward here
$result = "REWARD THE USER HERE";

if($result){
    
    header("HTTP/1.1 200"); // Postback Received - don't send it again
    
    echo "OK - Postback Success";
    
}else{
    
    header("HTTP/1.1 400"); // There was an error, send the postback again
    
    echo "NOT OK - Postback Failed";
    
}


?><?php
/*
 * @AdMantum
 *
 * Postback Example Script.  This script is meant to only be a rough outline of
 * how a postback should operate, and not necessarily used out of the box.
 * 
 * Copyright 2020. AdMantum. All Rights Reserved
 */

// Setup postback variables.  For a complete list of parameters visit https://admantum.com/documentation/#pb-parameters

$userId =            $_REQUEST['uid'];
$offerId =    $_REQUEST['of_id'];
$offerName =    $_REQUEST['of_name'];
$virtual_currency = $_REQUEST['virtual_currency'];

// Check your app user from database against the recievd userId and reward here
$result = "REWARD THE USER HERE";

if($result){
    
    header("HTTP/1.1 200"); // Postback Received - don't send it again
    
    echo "OK - Postback Success";
    
}else{
    
    header("HTTP/1.1 400"); // There was an error, send the postback again
    
    echo "NOT OK - Postback Failed";
    
}


?>