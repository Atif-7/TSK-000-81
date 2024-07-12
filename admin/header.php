<!-- Config -->
<?php require("../includes/config.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../admin/js/scripts.js"></script>
</head>
<?php
if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){

?>
<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand text-dark bg-light py-4">
    <!-- Navbar Brand-->
    <a class="navbar-brand d-flex align-items-center" style="margin-right:11rem" href="../index.php">
        
        <img src="../assets/images/logo.png" width="200px" class="ms-4">
    </a>
            <!-- Sidebar Toggle-->
    <a id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></a>
            <!-- Navbar-->
     <ul class="navbar-nav  ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/profile.png" class="img-fluid" width="30px" alt=""> <span style="font-size: 16px; font-weight:bold"><?php echo $_SESSION["n"] ?></span></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item  bg-danger text-light fw-bold text-center" href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

        <?php 
}
else{
    // header("refresh:0.2,url='login.php'");
}
?>