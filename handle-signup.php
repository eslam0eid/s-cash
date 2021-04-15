<?php 

session_start();
include 'connection.php';

$fullName = $_POST['FullName'];
$UName = $_POST['uname'];
$UserEmail = $_POST['Uemail'];
$UserPass = $_POST['password'];
$confpass=$_POST['confpassword'];
$UserPhone = $_POST['phone'];




$errors=[];

// validation of name
if(empty($fullName))
{
$errors[]= "fullName is required";
}elseif(! is_string($fullName))
{
    $errors[]="you should enter string fullName";
}elseif( strlen($fullName) < 5 or strlen($fullName) > 255 )
{
$errors[]="fullName min is 5 and max is 255";
}

$query1 = "SELECT UserEmail FROM  users WHERE UserEmail='$UserEmail' ";
$query2 = "SELECT Username  FROM  users WHERE Username='$UName' ";
$done1 = mysqli_query($con, $query1);
$done2 = mysqli_query($con, $query2);

// validation of username
if(empty($UName))
{
$errors[]= "username is required";
}elseif((mysqli_num_rows($done2) > 0))
{
    $row = mysqli_fetch_assoc($done2);
    $errors[]="username not available";
}

    // validate email 
    if (empty($UserEmail)) {
        $errors[] = 'email is required';
    } elseif (! filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'email is not valid';
    }elseif((mysqli_num_rows($done1) > 0))
    {
        $row = mysqli_fetch_assoc($done1);
        $errors[]="email not available";
        
    }

   

    //validate password
    if(empty($UserPass))
    {
        $errors[]= 'password is required';
    }

    //validation verify password
    if(empty($confpass))
    {
        $errors[]= 'confirm password is required';
    }else if($confpass !== $UserPass)
    {
        $errors[]= "enter right password ";
    }


//validation of phone
if(empty($UserPhone))
{
    $errors[]="phone  is required";
}elseif(! is_numeric($UserPhone))
{
    $errors[]="you should enter phone ";
}

if(empty($errors))
{
   
    
 
    
    
      $q = "INSERT INTO users (FullName,Username,UserEmail,UserPassword,UserPhone) VALUES ('$fullName','$UName','$UserEmail','$UserPass','$UserPhone')";
      $newRes = mysqli_query($con, $q);
      $_SESSION['success'] = 'user added successful';
      header("location: login.php");
    

}else{
    $_SESSION['errors']=$errors;
    header("location: signup.php");
}






?>