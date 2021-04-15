<?php
session_start();
include 'connection.php';
$title = "Login";
include 'header.php';


?>

<!-- nav component -->
<div class="Navbar fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo/s-cash.png" alt="" width="120" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="terms.php">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="privacy.php">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- login -->

<div class="login-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>sign in</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group">
                        <input class="input-style" type="email" name="uemail" id="" placeholder="Enter your E-mail">
                    </div>
                    <div class="form-group">
                        <input class="input-style" type="password" name="upassword" id="" placeholder="Enter your password">
                    </div>
   
                    <div class="form-group">
                        <input type="checkbox">
                        <label for="">Remember me</label>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="isLogin">log in</button>
                    </div>
                </form>
                <hr>
                <p>Don't have an account yet? <a href="signup.php">Sign Up!</a> </p>
            </div>
        </div>
    </div>
</div>


<?php

if (isset($_POST['isLogin'])) {
    $uEmail = $_POST['uemail'];
    $uPass  = $_POST['upassword'];

    $que = "SELECT * FROM users WHERE UserEmail = '$uEmail' AND UserPassword = '$uPass' AND GroupID = 0";
    $res = mysqli_query($con, $que);

    if (mysqli_num_rows($res) > 0) {

        $_SESSION['isLogin'] = true;
        $row = mysqli_fetch_assoc($res);
        $_SESSION['uname'] = $row["Username"];

        header('location:dashbord.php');
    } else {
        header('location: login.php');
    }
}
?>


<?php
include 'footer.php';
?>