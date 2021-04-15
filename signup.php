<?php

session_start();
include 'connection.php';
$title = "SignUp";
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

<div class="sign-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>sign up</h2>
                <form action="handle-signup.php" method="POST" enctype="">
                    <div class="form-group">
                        <input class="input-style" type="text" name="FullName" id="" placeholder="Enter your Full Name">
                    </div>
                    <div class="form-group">
                        <input class="input-style" type="text" name="uname" id="" placeholder="Enter User Name">
                    </div>
                    <div class="form-group">
                        <input class="input-style" type="email" name="Uemail" id="" placeholder="Enter your E-mail">
                    </div>

                    <div class="form-group">
                        <input class="input-style" type="password" name="password" id="" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <input class="input-style" type="password" name="confpassword" id="" placeholder="Repeat your password">
                    </div>
                    <div class="form-group">
                        <label class="note" for="">Please Enter your number that will receive money</label>
                        <input class="input-style" type="text" name="phone" id="" placeholder="your phone">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="signup" name="isSignUp"></input>
                    </div>
                </form>
                <?php
                if(isset($_SESSION['errors']))
                    {
                    
                    foreach($_SESSION['errors'] as $value){
                    
                        echo "<P> $value </p>";
                    
                    }
                    
                    }
                    
                    //flashing
                    unset($_SESSION['errors']);
                    
                    ?>
                <hr>
                <p>Already Have an account ? <a href="login.php">Sign in!</a> </p>
            </div>
        </div>
    </div>
</div>



<?php

include 'footer.php';
?>