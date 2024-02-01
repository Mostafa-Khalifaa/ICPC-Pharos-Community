<?php
require_once "includes/config_session.inc.php";
$log;
if (isset($_SESSION["user_username"])) {
    $log = $_SESSION["user_username"];
} else {
    $log = "Login";
}
?>
<nav>
    <div class="logo">
        <a href="#"><img src="img\ICPC Logo no background.png" alt="logo">ICPC Pharos</a>
    </div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="nav-bar">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="Trainings.php">Trainings </a>
            </li>
            <li>
                <a href="About_Us_Page.php">About us</a>
            </li>
            <li>
                <a href="User_Profile.php">My account</a>
            </li>
            <li>
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            <li>
                <a href="login.php" class="active">
                    <?php echo $log; ?>
                </a>
            </li>
        </ul>
    </div>
</nav>
<script src="js\Navbar.js"></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/39da319607.js" crossorigin="anonymous"></script>