<?php
session_start();
include 'connection.php';
$title = "adminDashbord";
include 'header.php';

if (!isset($_SESSION['isLogin'])) {
    header('location:adminLogin.php');
}
?>

<div class="Navbar fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashbord.php">
                    <img src="img/logo/s-cash.png" alt="" width="175" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="adminLoguot.php">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="adminDashboard py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center mb-4 text-primary">C-Panel</h2>
                <table class="table table-dark table-striped w-100 m-auto">
                    <thead>
                        <tr>
                            <th>UserID</th>
                            <th>FullName</th>
                            <th>UserEmail</th>
                            <th>UserPhone</th>
                            <th>GroupID</th>
                            <th>Total Points</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $del = "Delete";
                        $q = "SELECT * from users";
                        $dataRecord = mysqli_query($con, $q);
                        while ($row = mysqli_fetch_array($dataRecord)) {
                            echo "
                                        <tr>
                                        <td>$row[UserID]</td>
                                        <td>$row[FullName]</td>
                                        <td>$row[UserEmail]</td>
                                        <td>$row[UserPhone]</td>
                                        <td>$row[GroupID]</td>
                                        <td>$row[TotalPoints]</td>
                                        </tr>
                                    ";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php
include 'footer.php';
?>