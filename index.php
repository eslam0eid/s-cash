
<?php

session_start();
include 'connection.php';
$title = "scash";
include 'header.php';


if(isset($_SESSION['success'])){
   
}
 unset($_SESSION['success']);
?>

    <!-- nav component -->
    <div class="Navbar fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo/s-cash.png" alt="" width="175" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- slide component -->
    <div class="slide">
        <div class="layout"></div>
        <div class="contnet">
            <p>
                Get Free Cash & Redeem your points for your favorite retailers like
                <br />
                <span class="vod">V-Cash</span> ,<span class="Eti"> E-Cash</span> ,
                <span class="Orange">O-Cash</span>.
            </p>
            <a href="login.php">
                <button class="btn">login</button>
            </a>
            <a href="signup.php">
                <button class="btn">Sign up</button>
            </a>
        </div>
    </div>

    <!--  -->

    <section class="earn-points py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-4">
                    <img src="img/34323891-removebg-preview.png" alt="">
                </div>
                <div class="col-sm-8">
                    <h4>How Do I Earn Money ?</h4>
                    <p>
                        We, dear, provide you with many methods of withdrawal, so you can withdraw money in the
                        following ways: V-Cash , O-Cash and We-Pay</p>
                </div>
            </div>
            <hr>
            <div class="row my-5">

                <div class="col-sm-8">
                    <h4>How Do I Withdraw Money ?</h4>
                    <p>
                        We, dear, provide you with many methods of withdrawal, so you can withdraw money in the
                        following ways: V-Cash , O-Cash and We-Pay</p>
                </div>
                <div class="col-sm-4">
                    <img src="img/currency-exchange-illus-removebg-preview.png" alt="">
                </div>
            </div>
            <hr>
        </div>
    </section>
    
    <!-- content -->
    <div class="info my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>About us</h3>
                    <p>
                        We're passionate about offering some of the best business growth
                        services for startups
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Important links</h3>
                    <ul>
                        <li>
                            <p>
                                Read Our <a href="#">terms$conditions</a>,<a href="">privacy</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="col-md-4">
                    <h3>Social Media</h3>
                    <div class="links">
                        <ul>
                            <li>
                                <a href="">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2020 <span>S-Cash</span> All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';

?>