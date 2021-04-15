<?php

session_start();
include 'connection.php';
$title = "Dashboard";
include 'header.php';

if(!isset($_SESSION['isLogin'])){
    header('location:login.php');
}

$UsID = $_SESSION['uname'];
?>


    <!-- nav component -->
    <div class="Navbar fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="dashbord.php">
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
                                <a class="nav-link active" aria-current="page" href="dashbord.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="redeem.php">Redeem</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- login -->

    <div class="dashboard py-5">
        <div class="container">
            <div class="points mb-5">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="points-box">
                             <span>
                              <?php 
                                $q1 = "SELECT OffertoroPoints,AdgemPoints from users where Username = '$UsID'";
                            //   $q2 = "SELECT AdgemPoints from users where UserID like $UsID";
                                $currPont = mysqli_query($con,$q1);
                                while ($row = $currPont->fetch_assoc()) {
                                    echo $row['OffertoroPoints'] + $row['AdgemPoints'];
                                }
                             ?>
                             </span>
                            <p>current points</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="points-box">
                            <span>
                            <?php 
                                $tot = mysqli_query($con,$q1);
                                while ($row = $tot->fetch_assoc()) {
                                    $total = $row['OffertoroPoints'] + $row['AdgemPoints'];
                                    echo $total;

                                }
                                mysqli_query($con,"UPDATE users SET TotalPoints = '$total' WHERE Username LIKE '$UsID' LIMIT 1");

                             ?>
                            </span>
                            <p>Total points</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="points-box">
                            <span>0</span>
                            <p>Redeemed points</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="points-box">
                            <span>0</span>
                            <p>Members Reffered</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="companies">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-adgem-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-adgem" type="button" role="tab" aria-controls="pills-adgem"
                            aria-selected="true">
                            $adgem
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-admantum-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-admantum" type="button" role="tab" aria-controls="pills-admantum"
                            aria-selected="false">
                            $admantum
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-offertoro-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-offertoro" type="button" role="tab" aria-controls="pills-offertoro"
                            aria-selected="false">
                            $offertoro
                        </button>
                    </li>
                    
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-adgem" role="tabpanel"
                        aria-labelledby="pills-adgem-tab">
                        <div class="adgem-company">
                            <iframe src="https://api.adgem.com/v1/wall?appid=3619&playerid=<?php echo $UsID ?>">Your browser doesn't
                                support iframes</iframe>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-admantum" role="tabpanel" aria-labelledby="pills-admantum-tab">
                        <div class="admantum-company">
                            <iframe src="https://www.admantum.com/offers?appid=13837&uid=<?php echo $UsID ?>"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-offertoro" role="tabpanel" aria-labelledby="pills-offertoro-tab">
                        <div class="offertoro-company">
                            <iframe src="https://www.offertoro.com/ifr/show/26449/<?php echo $UsID ?>/12047" frameborder="0"></iframe> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
 
    ?>
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